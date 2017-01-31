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
        if(true === $this->ion_auth->logged_in())
            redirect(base_url('admin/dashboard'));
        
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
                $identity = $this->input->post('username');
                $password = $this->input->post('password');
                $remember = (bool) $this->input->post('remember_me'); // remember the user
                
                if(true === $this->ion_auth->login($identity, $password, $remember))
                {
                    // create success msg
                    redirect(base_url('admin/dashboard'));
                }
                else
                {
                    // create error msg
                    redirect(base_url('admin/login'));
                }
            }
            else
            {
                // create error msg
                redirect(base_url('admin/login'));
            }
        }
        
        $this->load->view('admin/login', $this->data);
    }
    
    public function logout()
    {
        $this->ion_auth->logout();
        // setup msg
        redirect(base_url('admin/login'));
    }
}
