<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Home extends RestController
{
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
	}

	public function index_get()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

}
