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
} 