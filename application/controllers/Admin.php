<?php
class Admin extends CI_Controller {
		function index() {
		$judul 		= "Welcome Admin";
		$data['judul'] 	= $judul;
		$this->load->view('v_admin');
	}

}