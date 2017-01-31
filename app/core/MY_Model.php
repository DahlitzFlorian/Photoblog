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
    
    public function getAll($order_type = FALSE) // $order_type if existing as array[key, type]
    {
        if($order_type)
            $this->db->order_by($order_type[0], $order_type[1]);
        
        return $this->db->get($this->table)->result();
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
     * updating data
     */
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    
    /**
     * counting data
     */
    public function count($obj)
    {
        return count((array)$obj);
    }
    
    public function count_by($key, $value)
    {
        $this->db->get_where($this->table, [$key => $value])->result();
        return $this->db->count_all_results($this->table);
    }
    
    /**
     * form validation
     */
    public function set_validation_rules()
    {
        $this->form_validation->set_rules($this->validation_rules);
    }
} 
