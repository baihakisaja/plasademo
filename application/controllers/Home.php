<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_daerah');
		$this->load->model('m_pasang_baru');
		$this->load->model('m_gangguan');
		$this->load->model('m_informasi');
  		$this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		$x['data_daerah']=$this->m_daerah->get_all_daerah();
		$this->load->view('frontend/header',$x);
		$this->load->view('frontend/home');
		$this->load->view('frontend/footer');
	}

	public function aksi()
	{
		$tanggal= mktime(date("m"),date("d"),date("Y"));
		date_default_timezone_set('Asia/Jakarta');
		$jam=date("H:i:s");
		$data_input = $this->input->post('data_input');
		if ($data_input=="1") {
				$data = array(
					'nama_pelanggan' => $this->input->post('nama_pelanggan'),
					'nomor_pelanggan' => $this->input->post('no_hp'),
					'id_daerah' => $this->input->post('id_daerah'),
					'jam' => $jam,
					'tgl' => date("d-M-Y", $tanggal),
					'status' => "1"
				);
				$result = $this->m_pasang_baru->add_pasang_baru($data);
				redirect(base_url('antrian/regis'));
					
		}elseif ($data_input=="2") {
			$data = array(
					'nama_pelanggan' => $this->input->post('nama_pelanggan'),
					'nomor_indihome' => $this->input->post('no_indihome'),
					'id_daerah' => $this->input->post('id_daerah'),
					'jam' => $jam,
					'tgl' => date("d-M-Y", $tanggal),
					'status' => "1"
				);
				$result = $this->m_gangguan->add_gangguan($data);
				redirect(base_url('antrian/gangguan'));
		}else{
			$data = array(
					'nama_pelanggan' => $this->input->post('nama_pelanggan'),
					'nomor_pelanggan' => $this->input->post('no_hp'),
					'id_daerah' => $this->input->post('id_daerah'),
					'jam' => $jam,
					'tgl' => date("d-M-Y", $tanggal),
					'status' => "1"
				);
				$result = $this->m_informasi->add_informasi($data);
				redirect(base_url('antrian/informasi'));
		}
	}

	
}
