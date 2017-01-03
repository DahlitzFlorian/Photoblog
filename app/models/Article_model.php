<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Model
 * @author Florian Dahlitz
 *
 * handles article-based data
 */
class Article_model extends MY_Model
{
    /**
     * default table
     */
    protected $table = 'articles';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getLatestArticles($limit = 6)
    {
        $this->db->order_by('date', 'DESC');
        $this->db->order_by('id', 'DESC');
        
        return $this->db->get($this->table, $limit)->result();
    }
} 
