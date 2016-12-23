<?php
class Ubuku extends CI_Controller {


		function index() {
		$this->load->helper('html');
		$this->load->model('model_ubuku');
		$judul 		= "Daftar Buku";
		$data['judul'] 	= $judul;
		$data['ubuku'] = $this->model_ubuku->list_ubuku()->result();
		$this->template->load('templateu','list_ubuku',$data);
		//$this->load->view('list_bayar',$data);
	}
	function cariData(){
		$cari=$this->input->get('cari');
		$data['cari']=$this->model_ubuku->caribuku($cari);
		$this->template->load('templateu','list_ubuku',$data);
	}
}
?>
