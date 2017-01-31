<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * article management in admin panel
 */
class Article extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->ion_auth->logged_in())
            redirect(base_url('admin/login'));
    }
    
    public function index()
    {
        $this->data['subview'] = 'admin/article';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function new_article()
    {
        
    }
}
