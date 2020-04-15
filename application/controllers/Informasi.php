<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

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
		$x['data_informasi']=$this->m_informasi->get_all_informasi();
		$this->load->view('backend/header',$x);
		$this->load->view('backend/informasi');
	}

	public function list_informasi(){
		header('Content-Type: application/json');
        $data = $this->m_informasi->get_all_informasi()->result();
        echo json_encode($data);
    }

		public function selesai()
	{
		$id = $this->input->post('id_informasi'); 
					$data = array(
								'status' => "2"
							);
				
					$result = $this->m_informasi->edit_informasi($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('informasi'));
					}
	}

	function hapus_informasi(){
		$kode=$this->input->post('kode');
		$this->m_informasi->hapus_informasi($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('informasi');
	}
}