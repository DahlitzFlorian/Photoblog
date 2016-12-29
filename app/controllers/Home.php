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

		$this->load->model('Home_model', 'home');
	}

	public function index()
	{
		$this->data['start_text'] = $this->home->get_by('title', 'Starttext');

		$this->data['subview'] = 'home';
		$this->load->view('layout', $this->data);
	}
}
