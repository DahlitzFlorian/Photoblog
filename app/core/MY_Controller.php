<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Core
 * @author Florian Dahlitz
 *
 * main controller every other inherits
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // load general config
        $this->load->config('general');
    }
}
