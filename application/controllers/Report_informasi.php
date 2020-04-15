<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_informasi extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_informasi');
	$this->load->model('m_data');
	}

	public function index()
	{
		$x['jumlah_regis'] =  $this->m_data->hitung_regis();
		$x['jumlah_gangguan'] =  $this->m_data->hitung_gangguan();
		$x['jumlah_informasi'] =  $this->m_data->hitung_informasi();
		$x['data_informasi']=$this->m_informasi->get_all_informasi2();
		$this->load->view('backend/header',$x);
		$this->load->view('backend/informasi2');
		$this->load->view('backend/footer');
	}

		

	function hapus_informasi(){
		$kode=$this->input->post('kode');
		$this->m_informasi->hapus_informasi($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('report_informasi');
	}
}