<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles start page
 */
class Home extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Article_model', 'article');
    }

    public function index()
    {
        $this->data['latestArticles'] = $this->article->getLatestArticles();

        $this->data['subview'] = 'home';
        $this->load->view('layout', $this->data);
    }
}
