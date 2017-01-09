<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Model
 * @author Florian Dahlitz
 *
 * handles category-based data
 */
class Category_model extends MY_Model
{
    /**
     * default table
     */
    protected $table = 'categories';
    
    /**
     * validation rules
     */
    protected $validation_rules = [];
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getName($cat_id)
    {
        return $this->db->get_where($this->table, ['id' => $cat_id])->row()->name;
    }
} 
