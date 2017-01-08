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
    
    /**
     * validation rules
     */
    protected $validation_rules = [
        [
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|min_length[4]'
        ],
        [
            'field' => 'text',
            'label' => 'Kommentartext',
            'rules' => 'required|min_length[10]'
        ]
    ];
    
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
    
    public function getComments($article_id)
    {
        return $this->db->get_where('comments', ['article_id' => $article_id])->result();
    }
} 
