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
        $this->data['article'] = $this->article->get_by('path', $path);
        
        $this->data['subview'] = 'article';
        $this->load->view('layout', $this->data);
    }
}
