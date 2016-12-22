<?php
class Pelanggan extends CI_Controller {
	chek_session();
		function index() {
		$this->load->model('model_pelanggan');
		$judul 		= "Daftar pelanggan";
		$data['judul'] 	= $judul;
		$data['pelanggan'] = $this->model_pelanggan->list_pelanggan()->result();
		$this->template->load('template','list_pelanggan',$data);
		//$this->load->view('list_pelanggan',$data);
	}

	function input(){
		$this->template->load('template','v_input_pelanggan');
		//$this->load->view('v_input_pelanggan');
	}

	function input_simpan(){
		$datapelanggan = array (
			'kd_pelanggan' =>$this->input->post('kd_pelanggan'),
			'nama_pelanggan' =>$this->input->post('nama_pelanggan'),
			'alamat_pelanggan' =>$this->input->post('alamat_pelanggan'),
			'telpon_pelanggan' =>$this->input->post('telpon_pelanggan'));

		$this->db->insert('t_pelanggan',$datapelanggan);
		redirect('pelanggan');
	}

	function edit(){
		$this->load->model('model_pelanggan');
		$kd_pelanggan = $this->uri->segment(3);
		$data['product'] = $this->model_pelanggan->product($kd_pelanggan)->row_array();

		$this->template->load('template','v_edit_pelanggan',$data);
		//$this->load->view('v_edit_pelanggan',$data);
	}

	function edit_simpan(){
		$id = $this->input->post('id');
		$datapelanggan = array (
			'kd_pelanggan' =>$this->input->post('kd_pelanggan'),
			'nama_pelanggan' =>$this->input->post('nama_pelanggan'),
			'alamat_pelanggan' =>$this->input->post('alamat_pelanggan'),
			'telpon_pelanggan' =>$this->input->post('telpon_pelanggan'));
		$this->db->where('kd_pelanggan',$id);
		$this->db->update('t_pelanggan',$datapelanggan);
		redirect('pelanggan');
	}

	function delete() {
		$kd_pelanggan = $this->uri->segment(3);
		$this->db->where('kd_pelanggan',$kd_pelanggan);
		$this->db->delete('t_pelanggan');
		redirect('pelanggan');
	}

}
