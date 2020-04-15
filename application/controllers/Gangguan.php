<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gangguan extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_gangguan');
	$this->load->model('m_data');
	}

	public function index()
	{
		$x['jumlah_regis'] =  $this->m_data->hitung_regis();
		$x['jumlah_gangguan'] =  $this->m_data->hitung_gangguan();
		$x['jumlah_informasi'] =  $this->m_data->hitung_informasi();
		$x['data_gangguan']=$this->m_gangguan->get_all_gangguan();
		$this->load->view('backend/header',$x);
		$this->load->view('backend/gangguan');
	}
	public function list_gangguan(){
		header('Content-Type: application/json');
        $data = $this->m_gangguan->get_all_gangguan()->result();
        echo json_encode($data);
    }

		public function selesai()
	{
		$id = $this->input->post('id_gangguan'); 
					$data = array(
								'status' => "2"
							);
				
					$result = $this->m_gangguan->edit_gangguan($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('gangguan'));
					}
	}

	function hapus_gangguan(){
		$kode=$this->input->post('kode');
		$this->m_gangguan->hapus_gangguan($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('gangguan');
	}
}