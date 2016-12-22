<?php
class Bayar extends CI_Controller {

	chek_session();
		function index() {
		$this->load->model('model_bayar');
		$judul 		= "Daftar Bayar";
		$data['judul'] 	= $judul;
		$data['bayar'] = $this->model_bayar->list_bayar()->result();
		$this->template->load('template','list_bayar',$data);
		//$this->load->view('list_bayar',$data);
	}

	function input(){
		$this->template->load('template','v_input_bayar');
		//$this->load->view('v_input_bayar');
	}

	function input_simpan(){
		$databayar = array (
			'no_faktur' =>$this->input->post('no_faktur'),
			'uang_bayar' =>$this->input->post('uang_bayar'),
			'uang_kembali' =>$this->input->post('uang_kembali'));

		$this->db->insert('t_bayar',$databayar);
		redirect('bayar');
	}

	function edit(){
		$this->load->model('model_bayar');
		$no_faktur = $this->uri->segment(3);
		$data['product'] = $this->model_bayar->product($no_faktur)->row_array();
		$this->template->load('template','list_bayar',$data);
		//$this->load->view('v_edit_bayar',$data);
	}

	function edit_simpan(){
		$id = $this->input->post('id');
		$databayar = array (
			'no_faktur' =>$this->input->post('no_faktur'),
			'uang_bayar' =>$this->input->post('uang_bayar'),
			'uang_kembali' =>$this->input->post('uang_kembali'));
		$this->db->where('no_faktur',$id);
		$this->db->update('t_bayar',$databayar);
		redirect('bayar');
	}

	function delete() {
		$no_faktur = $this->uri->segment(3);
		$this->db->where('no_faktur',$no_faktur);
		$this->db->delete('t_bayar');
		redirect('bayar');
	}

}
