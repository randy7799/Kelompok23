<?php
class Buku extends CI_Controller {

	function index() {
		$this->load->model('model_buku');
		$judul 		= "Daftar Buku";
		$data['judul'] 	= $judul;
		$data['buku'] = $this->model_buku->list_buku()->result();
		$this->load->view('list_buku',$data);
	}

	function input(){
		$this->load->view('v_input_buku');
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
			'foto' =>$this->input->post('foto'));

		$this->db->insert('t_buku',$databuku);
		redirect('buku');
	}

	function edit(){
		$this->load->model('model_buku');
		$kd_buku = $this->uri->segment(3);
		$data['product'] = $this->model_buku->product($kd_buku)->row_array();

		$this->load->view('v_edit_buku',$data);
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
			'foto' =>$this->input->post('foto'));
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