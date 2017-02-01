<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Model
 * @author Florian Dahlitz
 *
 * handles user-based data
 */
class User_model extends MY_Model
{
    /**
     * default table
     */
    protected $table = 'users';
    
    /**
     * validation rules
     */
    protected $validation_rules = [
        [
            'field' => 'first_name',
            'label' => 'Vorname',
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'Bitte geben Sie einen Vornamen ein',
                'min_length' => 'Der %s muss mindestens 3 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'last_name',
            'label' => 'Nachname',
            'rules' => 'required|min_length[4]',
            'errors' => [
                'required' => 'Bitte geben Sie einen Nachnamen ein',
                'min_length' => 'Der Nachname muss mindestens 4 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'username',
            'label' => 'Nutzername',
            'rules' => 'required|min_length[4]',
            'errors' => [
                'required' => 'Bitte geben Sie einen Nutzernamen ein',
                'min_length' => 'Der Nutzername muss mindestens 4 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Bitte geben Sie eine Email-Adresse ein',
                'valid_email' => 'Die Email-Adresse muss valide sein'
            ]
        ],
        [
            'field' => 'password',
            'label' => 'Passwort',
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Bitte geben Sie ein Passwort ein',
                'min_length' => 'Das Passwort muss mindestens 8 Zeichen umfassen'
            ]
        ],
        [
            'field' => 'password_confirm',
            'label' => 'Passwort (Wiederholung)',
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'Bitte wiederholen Sie das Passwort',
                'matches' => 'Das Passwort muss mit dem vorherigen übereinstimmen'
            ]
        ],
        [
            'field' => 'password_admin',
            'label' => 'Passwort (Administrator)',
            'rules' => 'required',
            'errors' => [
                'required' => 'Bitte geben Sie das Passwort des angemeldeten Administrators ein'
            ]
        ]
    ];
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getGroups()
    {
        $ion_auth_groups = $this->ion_auth->groups()->result();
        $groups = [];
        
        foreach($ion_auth_groups as $group)
            $groups[$group->id] = $group->description;
        
        return $groups;
    }
}
