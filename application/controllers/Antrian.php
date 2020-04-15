<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_data');
  		$this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		
	}

	public function regis()
	{
		$x['jumlah_regis'] =  $this->m_data->hitung_regis();
		$this->load->view('frontend/antrian',$x);
	}
	public function gangguan()
	{
		$x['jumlah_gangguan'] =  $this->m_data->hitung_gangguan();
		$this->load->view('frontend/antrian2',$x);
	}
	public function informasi()
	{
		$x['jumlah_informasi'] =  $this->m_data->hitung_informasi();
		$this->load->view('frontend/antrian3',$x);
	}

	
}
