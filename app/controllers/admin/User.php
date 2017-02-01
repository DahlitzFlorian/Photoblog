<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles user
 */
class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->ion_auth->logged_in())
            redirect(base_url('admin/user'));
        
        $this->load->model('User_model', 'user');
    }
    
    public function index()
    {
        $this->data['users'] = $this->user->getAll();
        
        $this->data['subview'] = 'admin/user';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function new_user()
    {
        if($this->input->post('add_user_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->user->set_validation_rules());
        
            if($this->form_validation->run())
            {
                $this->load->library('Bcrypt');
                $bcrypt = new Bcrypt();
                
                if($bcrypt->verify($this->input->post('password_admin'), $this->data['user']->password))
                {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $email = $this->input->post('email');
                    $data = [
                     'first_name' => $this->input->post('first_name'),
                     'last_name' => $this->input->post('last_name')
                    ];
                    $group = [$this->input->post('group')];
                    
                    if($this->ion_auth->register($username, $password, $email, $data, $group))
                        redirect(base_url('admin/user'));
                    else
                        $this->data['msg'] ='<p>Der Nutzer konnte aus unbekannten Gründen nicht hinzugefügt werden.</p>';
                }
                else 
                    $this->data['msg'] = '<p>Das Administrator Passwort ist falsch.</p>';
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        
        $this->data['groups'] = $this->user->getGroups();
        
        $this->data['subview'] = 'admin/user/new';
        $this->load->view('admin/layout', $this->data);
    }
}
