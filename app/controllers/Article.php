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
    }
    
    private function countImages($path)
    {
        $img_path = FCPATH . $path . '/';
        $img_path = str_replace('/', '\\', $img_path);
        $counter = 0;
        $files = glob($img_path . '*.jpg');
        
        if($files !== false)
            $counter = count($files);
        
        return $counter;
    }

    public function show()
    {
        $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url = explode("/", $url, 4);
        $path = $url[3];
        
        $article = $this->article->get_by('path', $path);
        $this->data['article'] = $article;
        
        if($article->type == 'slide')
        {
            $this->load->helper('slider');
            $this->data['imgCount'] = 7; //$this->countImages('assets/pics/art/2017/test' . $article->path);
            $this->data['imgPath'] = base_url('', NULL, FALSE) . 'assets/pics/art/' . $article->path;
            $this->data['subview'] = 'article_slide';
        }
        else 
            $this->data['subview'] = 'article_include'; // need also to replace paths w/ full paths
        
        $this->load->view('layout', $this->data);
    }
}
