<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operational extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
  		$this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		$this->load->view('frontend/operational');
	}

	
}
