<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_daerah');
	$this->load->model('m_data');
	}

	public function index()
	{
		$x['jumlah_regis'] =  $this->m_data->hitung_regis();
		$x['jumlah_gangguan'] =  $this->m_data->hitung_gangguan();
		$x['jumlah_informasi'] =  $this->m_data->hitung_informasi();
		$x['data_daerah']=$this->m_daerah->get_all_daerah();
		$this->load->view('backend/header',$x);
		$this->load->view('backend/daerah');
		$this->load->view('backend/footer');
	}

		public function simpan_daerah()
	{
				
					$data = array(
								'nama_daerah' => $this->input->post('nama_daerah')
							);
					
				
					$result = $this->m_daerah->add_daerah($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('daerah'));
					}
	}



		public function update_daerah()
	{
		$id = $this->input->post('id_daerah'); 
					$data = array(
								'nama_daerah' => $this->input->post('nama_daerah')
							);
				
					$result = $this->m_daerah->edit_daerah($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('daerah'));
					}
	}

	function hapus_daerah(){
		$kode=$this->input->post('kode');
		$this->m_daerah->hapus_daerah($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('daerah');
	}
}