<?php
class Buku extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_buku');

	}

/*	function index(){
	// Berfungsi untuk mengecek apakah ada session user yang login
	if ($this->session->userdata('name_user')) {

	// Jika ada session user yang login maka akan dialihkan ke halaman dashboard
	$this->load->model('model_buku');
	$judul 		= "Daftar Buku";
	$data['judul'] 	= $judul;
	$data['buku'] = $this->model_buku->list_buku()->result();
	$this->template->load('template','list_buku',$data);
	}
	else{
		// jika tidak ada maka akan dikembalikan ke halaman login
		redirect('auth');
	}
}*/
	function index() {
		$this->load->model('model_buku');
		$judul 		= "Daftar Buku";
		$data['judul'] 	= $judul;
		$data['buku'] = $this->model_buku->list_buku()->result();
		$this->template->load('template','list_buku',$data);
	}

	function input(){
		$judul 		= "Input Buku";
		$data['judul'] 	= $judul;
		$this->template->load('template','v_input_buku',$data);
	}

	function input_simpan(){
		$databuku = array (
			'kd_buku' =>$this->input->post('kd_buku'),
			'judul_buku' =>$this->input->post('judul_buku'),
			'jenis_buku' =>$this->input->post('jenis_buku'),
			'karang_buku' =>$this->input->post('karang_buku'),
			'terbit_buku' =>$this->input->post('terbit_buku'),
			'tahun_buku' =>$this->input->post('tahun_buku'),
			'harga_buku' =>$this->input->post('harga_buku'),
			'stok_buku' =>$this->input->post('stok_buku'),
			'search' =>$this->input->post('search'));

		$this->db->insert('t_buku',$databuku);
		redirect('buku');
	}

	function edit(){
		$judul 		= "Edit Buku";
		$data['judul'] 	= $judul;
		$this->load->model('model_buku');
		$kd_buku = $this->uri->segment(3);
		$data['product'] = $this->model_buku->product($kd_buku)->row_array();

		$this->template->load('template','v_edit_buku',$data);
		//$this->load->view('v_edit_buku',$data);
	}

	function edit_simpan(){

		$id = $this->input->post('id');
		$databuku = array (
			'kd_buku' =>$this->input->post('kd_buku'),
			'judul_buku' =>$this->input->post('judul_buku'),
			'jenis_buku' =>$this->input->post('jenis_buku'),
			'karang_buku' =>$this->input->post('karang_buku'),
			'terbit_buku' =>$this->input->post('terbit_buku'),
			'tahun_buku' =>$this->input->post('tahun_buku'),
			'harga_buku' =>$this->input->post('harga_buku'),
			'stok_buku' =>$this->input->post('stok_buku'),
			'search' =>$this->input->post('search'));
		$this->db->where('kd_buku',$id);
		$this->db->update('t_buku',$databuku);

		redirect('buku');
	}

	function delete() {
		$kd_buku = $this->uri->segment(3);
		$this->db->where('kd_buku',$kd_buku);
		$this->db->delete('t_buku');
		redirect('buku');
	}

}

?>
