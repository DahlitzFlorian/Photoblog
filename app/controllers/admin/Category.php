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
        
        if(!$this->ion_auth->logged_in())
            redirect(base_url('admin/login'));

        $this->load->model('Category_model', 'cat');
    }
    
    public function index()
    {
        $this->data['categories'] = $this->cat->getAll(['name', 'ASC']);
        
        $this->data['subview'] = 'admin/category';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function new_category()
    {
        if($this->input->post('add_category_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->cat->set_validation_rules());
            
            if($this->form_validation->run())
            {
                $data = [
                    'name' => $this->input->post('name')
                ];
                
                if($this->cat->add($data))
                    redirect(base_url('admin/category'));
                else
                    $this->data['msg'] ='<p>Die Kategorie konnte aus unbekannten Gründen nicht hinzugefügt werden.</p>';
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        
        $this->data['subview'] = 'admin/category/new';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function edit($id)
    {
        $category = $this->cat->get_by('id', $id);
        
        if($this->input->post('edit_category_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->cat->set_validation_rules());
        
            if($this->form_validation->run())
            {
                $data = [
                    'name' => $this->input->post('name')
                ];
        
                if($this->cat->update($category->id, $data))
                    redirect(base_url('admin/category'));
                else
                    $this->data['msg'] ='<p>Die Kategorie konnte aus unbekannten Gründen nicht aktualisiert werden.</p>';
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        
        $this->data['category'] = $category;
        
        $this->data['subview'] = 'admin/category/edit';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function delete($id)
    {
        if($this->input->post('delete_yes'))
        {
            $this->cat->delete($id);
            redirect(base_url('admin/category'));
        }
        else if($this->input->post('delete_no'))
            redirect(base_url('admin/category'));
        
        $this->load->helper('form');
        
        $this->data['category'] = $this->cat->get_by('id', $id);
        
        $this->data['subview'] = 'admin/category/delete';
        $this->load->view('admin/layout', $this->data);
    }
}
