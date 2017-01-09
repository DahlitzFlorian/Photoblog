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
        $this->data['subview'] = 'contact';
        $this->load->view('layout', $this->data);
    }
}
