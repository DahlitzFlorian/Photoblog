<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_URI extends CI_URI
{

    public function __construct()
    {
        parent::__construct();
    }

    public function segment($n, $no_result = NULL, $start = false)
    {
        if (false === $start)
            return parent::segment($n, $no_result);
        
        if (! isset($this->segments[$n]))
            return $no_result;
        
        $string = '';
        $total = $this->total_segments();
        for ($i = $n; $i <= $total; $i ++) {
            $string .= $this->segments[$i] . '/';
        }
        return rtrim($string, '/');
    }
}