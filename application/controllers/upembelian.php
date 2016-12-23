<?php
class Upembelian extends CI_Controller {

	function __construct()
{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'Recaptcha'));
}


		function index() {
		$this->load->model('model_upembelian');
		$judul 		= "Pembelian Buku";
		$data['judul'] 	= $judul;
		$no_faktur = $this->uri->segment(3);
		$data['product'] = $this->model_upembelian->product($no_faktur)->row_array();
		$this->template->load('templateu','list_upembelian',$data);

	}

}
?>
