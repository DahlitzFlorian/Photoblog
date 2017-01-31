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
        }
        
        $this->load->helper('form');
        
        $this->data['subview'] = 'admin/page/new';
        $this->load->view('admin/layout', $this->data);
    }
}
