<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Core
 * @author Florian Dahlitz
 *
 * main controller every other inherits
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // load general config
        $this->load->config('general');
        // Assign current user
        $this->data['user'] = $this->ion_auth->user()->row();
        
        // Is admin panel
        $this->data['admin_panel'] = ($this->uri->segment(1) == "admin");
        
        if ($this->data['admin_panel']) {
            // Load admin panel related stuff
            $this->data['title'] = $this->config->item('admin_title');
            $this->load->library('session');
        }
        else {
            // Load main panel related stuff
            $this->data['title'] = $this->config->item('title');
        }
    }
}
