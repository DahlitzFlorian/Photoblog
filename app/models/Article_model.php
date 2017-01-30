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
            'rules' => 'required|min_length[4]',
            'errors' => [
                'required' => 'Bitte geben Sie Ihren Namen ein',
                'min_length' => 'Der Name muss mindestens 4 Zeichen umfassen (Vor- und Nachname)'
            ]
        ],
        [
            'field' => 'email',
            'Label' => 'Email',
            'rules' => 'valid_email',
            'errors' => [
                'valid_email' => 'Es muss eine valide (echte) Email-Adresse sein'
            ]
        ],
        [
            'field' => 'text',
            'label' => 'Kommentartext',
            'rules' => 'required|min_length[10]',
            'errors' => [
                'required' => 'Bitte geben Sie einen %s ein',
                'min_length' => 'Der %s muss mindestens 10 Zeichen umfassen'
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
    
        $queries =  $this->db->get($this->table)->result();
        $result = [];      
        $i = 0;
        
        foreach($queries as $query)
        {
            if($query->tags != 1)
                $result[$i] = $query;
            
            $i++;
        }
        
        return $result;
    }
    
    public function getLatestArticles($limit = 9)
    {
        $this->db->order_by('date', 'DESC');
        $this->db->order_by('id', 'DESC');
        
        $queries = $this->db->get($this->table, $limit)->result();
        
        $result = [];
        $i = 0;
        
        foreach($queries as $query)
        {
            if($query->tags != 1)
                $result[$i] = $query;
        
            $i++;
        }
        
        return $result;
    }
    
    public function getByCat($cat_id)
    {
        return $this->db->get_where($this->table, ['tags' => $cat_id])->result();
    }
    
    public function getComments($article_id)
    {
        return $this->db->get_where('comments', ['article_id' => $article_id])->result();
    }
} 
