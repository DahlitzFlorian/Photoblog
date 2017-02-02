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
    protected $validation_rules = [
        [
            'field' => 'name',
            'label' => 'Kategoriename',
            'rules' => 'required',
            'errors' => [
                'required' => 'Bitte geben Sie einen Namen für die Kategorie ein'
            ]
        ]
    ];
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAll($order_type = FALSE) // $order_type if existing as array[key, type]
    {
        if($order_type)
            $this->db->order_by($order_type[0], $order_type[1]);
    
        $queries = $this->db->get($this->table)->result();
        $result = [];
        $i = 0;
        
        foreach($queries as $query)
        {
            if($query->id != 1)
                $result[$i] = $query;
            
            $i++;
        }
        
        return $result;
    }
    
    public function getAllWith($order_type = FALSE) // $order_type if existing as array[key, type]
    {
        if($order_type)
            $this->db->order_by($order_type[0], $order_type[1]);
    
        $queries = $this->db->get($this->table)->result();
        $result = [];
        $i = 0;
        
        foreach($queries as $query)
        {
            $result[$query->id] = $query->name;
            
            $i++;
        }
        
        return $result;
    }
    
    public function getName($cat_id)
    {
        $query = $this->db->get_where($this->table, ['id' => $cat_id])->row();
        
        if($query == NULL)
            return NULL;
        else 
            return $query->name;
    }
} 
