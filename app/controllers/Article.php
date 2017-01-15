<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles articles
 */
class Article extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Article_model', 'article');
        $this->load->helper('form');
    }

    private function countImages($path)
    {
        $img_path = FCPATH . $path;
        $counter = 0;
        try {
            $dir = new DirectoryIterator($img_path);
            foreach ($dir as $file) {
                if ($file->isFile() and $file->getExtension() === 'jpg') {
                    if ((preg_match('/^bild_(\d)+_l/', $file->getFilename()))) {
                        ++ $counter;
                    }
                }
            }
        } catch (UnexpectedValueException $ex) {}

        return $counter;
    }

    public function show()
    {
        $this->load->library('session');
        
        $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url = explode("/", $url, 4);
        $path = $url[3];

        $article = $this->article->get_by('path', $path);
        $this->data['article'] = $article;

        if($this->input->post('comment_submit'))
        {
            $this->load->library('form_validation');
            $this->article->set_validation_rules();

            if($this->form_validation->run())
            {
                $this->load->library('ReCaptcha_wrapper');
                $this->config->load('secure');
                $recaptcha = new \ReCaptcha\ReCaptcha($this->config->item('recaptcha_secret_key'));
                $resp = $recaptcha->verify($this->input->post('g-recaptcha-response'), $this->input->server('remote_addr'));
                if ($resp->isSuccess())
                {
                    if($this->input->post('email') != NULL)
                        $data = [
                            'article_id' => $article->id,
                            'name' => $this->input->post('name'),
                            'text' => $this->input->post('text'),
                            'email' => $this->input->post('email'),
                            'date' => date("Y-m-d H:i:s")
                        ];
                    else
                        $data = [
                            'article_id' => $article->id,
                            'name' => $this->input->post('name'),
                            'text' => $this->input->post('text'),
                            'date' => date("Y-m-d H:i:s")
                        ];
                }
                else 
                    redirect(base_url());

                $this->article->add_ext('comments', $data);
            }
        }

        $this->data['comments'] = $this->article->getComments($article->id);

        if($article->type == 'slide')
        {
            $this->data['fancy'] = true;
            $this->data['imgCount'] = $this->countImages('assets/pics/art/' . $article->path);
            $this->data['imgPath'] = base_url('', NULL, FALSE) . 'assets/pics/art/' . $article->path;
            $this->data['subview'] = 'article/article_slide';
        }
        else
            $this->data['subview'] = 'article/article_include'; // need also to replace paths w/ full paths

        $this->load->view('layout', $this->data);
    }
    
    public function latest()
    {
        $this->data['articles'] = $this->article->getLatestArticles(10);
        $this->data['header'] = 'Letzten 10 Artikel';
        
        $this->data['subview'] = 'article/article_list';
        $this->load->view('layout', $this->data);
    }
    
    public function all()
    {        
        $this->data['articles'] = $this->article->getAll(['date', 'DESC']);
        $this->data['header'] = 'Alle Artikel';
        
        $this->data['subview'] = 'article/article_list';
        $this->load->view('layout', $this->data);
    }
}
