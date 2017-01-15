<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles categories
 */
class Category extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Category_model', 'cat');
    }
    
    public function index()
    {
        $this->data['categories'] = $this->cat->getAll(['name', 'ASC']);
        
        $this->data['subview'] = 'category';
        $this->load->view('layout', $this->data);
    }
    
    public function show($cat_id)
    {
        $this->load->model('Article_model', 'article');
        
        $this->data['articles'] = $this->article->getByCat($cat_id);
        
        if($this->data['articles'] == NULL)
            redirect(base_url('article/not_found'));
        
        $this->data['header'] = 'Artikel zur Kategorie "' . $this->cat->getName($cat_id) . '"';
        
        $this->data['subview'] = 'article/article_list';
        $this->load->view('layout', $this->data);
    }
}
