<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles login/logout of admin panel
 */
class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->data['subview'] = 'admin/login';
        $this->load->view('admin/layout', $this->data);
    }
}
