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

    public function show($path)
    {
        $article = $this->article->get_by('path', $path);
        $this->data['article'] = $article;
        
        if($article->type == 'slide')
            $this->data['subview'] = 'article_slide';
        else 
            $this->data['subview'] = 'article_included'; // need also to replace paths w/ full paths
        
        $this->load->view('layout', $this->data);
    }
}
