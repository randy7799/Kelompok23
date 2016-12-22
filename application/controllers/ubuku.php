<?php
class Ubuku extends CI_Controller {


		function index() {
		$this->load->model('model_ubuku');
		$judul 		= "Daftar Buku";
		$data['judul'] 	= $judul;
		$data['ubuku'] = $this->model_ubuku->list_ubuku()->result();
		$this->template->load('templateu','list_ubuku',$data);
		//$this->load->view('list_bayar',$data);
	}
}
?>
