<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Model
 * @author Florian Dahlitz
 *
 * handles article-management-based data
 */
class Page_model extends MY_Model
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
            'field' => 'title',
            'label' => 'Titel',
            'rules' => 'required|min_length[4]',
            'errors' => [
                'required' => 'Bitte geben Sie einen Titel ein',
                'min_length' => 'Der Titel muss mindestens 4 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'path',
            'label' => 'Pfad',
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Bitte geben Sie einen Pfad ein',
                'min_length' => 'Der Pfad muss mindestens 8 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'content',
            'label' => 'Inhalt',
            'rules' => 'required|min_length[20]',
            'errors' => [
                'required' => 'Bitte geben Sie einen Text/Inhalt ein',
                'min_length' => 'Der Text/Inhalt muss mindestens 20 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'category',
            'label' => 'Kategorie',
            'rules' => 'required',
            'errors' => [
                'required' => 'Bitte geben Sie eine Kategorie ein'
            ]
        ],
        [
            'field' => 'type',
            'label' => 'Typ',
            'rules' => 'required',
            'errors' => [
                'required' => 'Bitte geben Sie einen Typ ein'
            ]
        ]
    ];
    
    public function __construct()
    {
        parent::__construct();
    }
}
