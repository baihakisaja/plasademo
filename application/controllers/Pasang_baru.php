<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasang_baru extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_pasang_baru');
	$this->load->model('m_data');
	}

	public function index()
	{
		$x['jumlah_regis'] =  $this->m_data->hitung_regis();
		$x['jumlah_gangguan'] =  $this->m_data->hitung_gangguan();
		$x['jumlah_informasi'] =  $this->m_data->hitung_informasi();	
		$x['data_pasang_baru']=$this->m_pasang_baru->get_all_pasang_baru();
		$this->load->view('backend/header',$x);
		$this->load->view('backend/pasang_baru');
	}
		public function list_pasang_baru(){
		header('Content-Type: application/json');
        $data = $this->m_pasang_baru->get_all_pasang_baru()->result();
        echo json_encode($data);
    }

		public function selesai()
	{
		$id = $this->input->post('id_pasang_baru'); 
					$data = array(
								'status' => "2"
							);
				
					$result = $this->m_pasang_baru->edit_pasang_baru($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('pasang_baru'));
					}
	}

	function hapus_pasang_baru(){
		$kode=$this->input->post('kode');
		$this->m_pasang_baru->hapus_pasang_baru($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('pasang_baru');
	}
}