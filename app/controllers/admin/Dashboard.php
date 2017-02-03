<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles dashboard
 */
class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if(!$this->ion_auth->logged_in())
            redirect(base_url('admin/login'));
        
        $this->load->model('Todo_model', 'todo');
    }
    
    public function index()
    {
        $reception = [
            1 => 'Guten Morgen',
            2 => 'Guten Tag',
            3 => 'Guten Abend',
            4 => 'Es ist spät - Hallo'
        ];
        
        $curr_hour = date('H');
        
        if($curr_hour >= 5 && $curr_hour < 9)
            $this->data['reception'] = $reception[1];
        else if($curr_hour >= 9 && $curr_hour < 18)
            $this->data['reception'] = $reception[2];
        else if($curr_hour >= 18 && $curr_hour < 22)
            $this->data['reception'] = $reception[3];
        else 
            $this->data['reception'] = $reception[4];
        
        $this->data['todos'] = $this->todo->getDashTodos($this->data['user']->id);
        
        $this->data['subview'] = 'admin/dashboard';
        $this->load->view('admin/layout', $this->data);
    }
}
