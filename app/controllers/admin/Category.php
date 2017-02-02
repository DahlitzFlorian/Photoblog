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
}
