<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles dashboard
 */
class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if(!$this->ion_auth->logged_in())
            redirect(base_url('admin/login'));
    }
    
    public function index()
    {
        $this->data['subview'] = 'admin/dashboard';
        $this->load->view('admin/layout', $this->data);
    }
}
