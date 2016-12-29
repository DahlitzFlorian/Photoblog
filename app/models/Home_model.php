<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Model
 * @author Florian Dahlitz
 *
 * handles start page data
 */
class Home_model extends MY_Model
{
    /**
     * default table
     */
    protected $table = 'home';
    
    public function __construct()
    {
        parent::__construct();
    }
} 
