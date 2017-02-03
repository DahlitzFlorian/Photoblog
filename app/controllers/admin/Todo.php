<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles todos
 */
class Todo extends MY_Controller
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
        $this->data['todos'] = $this->todo->replaceWithRealAuthor($this->todo->getTodos());
        
        $this->data['subview'] = 'admin/todo';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function new_todo()
    {
        if($this->input->post('add_todo_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->todo->set_validation_rules());
            
            if($this->form_validation->run())
            {
                $data = [
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'author' => $this->data['user']->id,
                    'date' => date('Y-m-d')
                ];
                
                if($this->todo->add($data))
                {
                    $user_ids = [];
                    if($this->input->post('all') !== FALSE)
                    {
                        $users = $this->ion_auth->users()->result();
                        foreach($users as $user)
                            $user_ids[] = $user->id;
                    }
                    else 
                        $user_ids[] = $this->ion_auth->user()->row()->id;
                    
                    $dash_link = ($this->input->post('dash_link')) !== FALSE ? 1 : 0;
                    
                    $this->todo->add_rel($user_ids, $dash_link);
                    redirect(base_url('admin/todo'));
                }
                else
                    $this->data['msg'] ='<p>Der Todo-Eintrag konnte aus unbekannten Gründen nicht hinzugefügt werden.</p>';
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        
        $this->data['subview'] = 'admin/todo/new';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function edit($id)
    {
        $todo = $this->todo->get_by('id', $id);
        
        if($this->input->post('edit_todo_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules($this->todo->set_validation_rules());
        
            if($this->form_validation->run())
            {
                $data = [
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content')
                ];
        
                if($this->todo->update($todo->id, $data))
                    redirect(base_url('admin/todo'));
                else
                    $this->data['msg'] ='<p>Der Todo-Eintrag konnte aus unbekannten Gründen nicht aktualisiert werden.</p>';
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        
        $this->data['todo'] = $todo;
        
        $this->data['subview'] = 'admin/todo/edit';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function delete($id)
    {
        $todo = $this->todo->get_by('id', $id);
        
        if($this->input->post('delete_yes'))
        {
            if($todo->author == $this->data['user']->id)
            {
                $this->todo->delete($id);
                $this->todo->delete_ext($id);
            }
            else 
                $this->todo->delete_ext($id, $this->data['user']->id);
            
            redirect(base_url('admin/todo'));
        }
        else if($this->input->post('delete_no'))
            redirect(base_url('admin/todo'));
        
        $this->load->helper('form');
        
        $this->data['todo'] = $todo;
        
        $this->data['subview'] = 'admin/todo/delete';
        $this->load->view('admin/layout', $this->data);
    }
    
    public function archive($id)
    {
        $todo = $this->todo->get_by('id', $id);
        
        if($this->input->post('archive_yes'))
        {
            $this->todo->archive($id);            
            redirect(base_url('admin/todo'));
        }
        else if($this->input->post('archive_no'))
            redirect(base_url('admin/todo'));
        
        $this->load->helper('form');
        
        $this->data['todo'] = $todo;
        
        $this->data['subview'] = 'admin/todo/archive';
        $this->load->view('admin/layout', $this->data);
    }
}
