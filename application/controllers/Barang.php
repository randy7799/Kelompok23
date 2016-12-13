<?php
class Barang extends CI_Controller {

	function index() {
		$this->load->model('model_barang');
		$judul 		= "Daftar Barang";
		$data['judul'] 	= $judul;
		$data['barang'] = $this->model_barang->list_barang();
		$this->load->view('list_barang',$data);
	}

	function edit(){
		echo $this->uri->segment(2);
	}

}

?>