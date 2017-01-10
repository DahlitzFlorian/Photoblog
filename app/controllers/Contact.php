<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles contact-page/form
 */
class Contact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->data['emails'] = $this->config->item('emails');
        
        $this->data['subview'] = 'contact';
        $this->load->view('layout', $this->data);
    }
}
