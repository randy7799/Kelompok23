<?php

/**
* 
*/
class Login extends CI_Controller{
	
	function __construct(){
		# code...
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->md5('$password');

		%cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek>0){
			$data_session = array('nama' => $username ,'status' => "login" );

			redirect(base_url("admin"));
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>