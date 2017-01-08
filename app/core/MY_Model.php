<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Core
 * @author Florian Dahlitz
 *
 * includes default fetch methods
 */
class MY_Model extends CI_Model
{
    /**
     * default table
     */
    protected $table;
    
    /**
     * validation rules
     */
    protected $validation_rules;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * get data
     */
    public function get_by($key, $value)
    {
        return $this->db->get_where($this->table, array($key => $value))->row();
    }
    
    /**
     * insert data
     */    
    public function add($data)
    {
        $this->db->insert($this->table, $data);
    }
    
    public function add_ext($table, $data)
    {
        $this->db->insert($table, $data);
    }
    
    /**
     * form validation
     */
    public function set_validation_rules()
    {
        $this->form_validation->set_rules($this->validation_rules);
    }
} 
