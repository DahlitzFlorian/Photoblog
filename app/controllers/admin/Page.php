<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * article management in admin panel
 */
class Page extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->ion_auth->logged_in())
            redirect(base_url('admin/login'));
        
        $this->load->model('Page_model', 'page');
    }
    
    public function index()
    {
        $this->data['subview'] = 'admin/page';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function new_article()
    {      
        if($this->input->post('add_article_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->page->set_validation_rules());
            
            if($this->form_validation->run())
            {
                $data = [
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('content'),
                    'path' => $this->input->post('path'),
                    'author' => $this->data['user']->first_name . ' ' . $this->data['user']->last_name,
                    'type' => $this->input->post('type'),
                    'tags' => $this->input->post('category')
                ];
                
                if($this->input->post('date') != NULL)
                    $data['date'] = date('Y-m-d', strtotime($this->input->post('date')));
                else
                    $data['date'] = date('Y-m-d');
                
                if($this->page->add($data))
                    redirect(base_url('admin/page'));
                else 
                    $this->data['msg'] ='<p>Der Artikel konnte aus unbekannten Gründen nicht hinzugefügt werden.</p>';
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        $this->load->model('Category_model', 'cat');
        
        $this->data['categories'] = $this->cat->getAllWith(['name', 'ASC']);
        
        $this->data['subview'] = 'admin/page/new';
        $this->load->view('admin/layout', $this->data);
    }
}
