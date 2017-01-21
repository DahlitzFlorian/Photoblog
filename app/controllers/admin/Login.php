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
        if($this->input->post('login_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules([
                [
                    'field' => 'username',
                    'Label' => 'Nutzername',
                    'rules' => 'required',
                    'errors' => []
                ],
                [
                    'field' => 'password',
                    'label' => 'Passwort',
                    'rules' => 'required',
                    'errors' => []
                ]
            ]);
            
            if($this->form_validation->run())
            {
                // set up session data
                redirect(base_url('admin/dashboard'));
            }
            else
            {
                // create error msg
            }
        }
        
        $this->load->view('admin/login', $this->data);
    }
}
