<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	public function index()
	{
		$this->load->view('login');
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$result = $this->m_login->cek_login("pengguna",$where)->row_array();
		if($result == TRUE){
			$data_session = array(
							'id_pengguna' => $result['id_pengguna'],
							'username' => $result['username'],
							'gambar' => $result['gambar'],
						 	'status' => "login"
						);
			$this->session->set_userdata($data_session);
			redirect("dashboard");
		}else{
			$this->session->set_flashdata('gagal_login', ' ');
			redirect("login");
		}
	}


			public function logout(){
			$this->session->sess_destroy();
			redirect("login");
		}
}
