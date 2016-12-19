<?php
class Transaksi extends CI_Controller {

	function index() {
		$this->load->model('model_transaksi');
		$judul 		= "Daftar Transaksi";
		$data['judul'] 	= $judul;
		$data['transaksi'] = $this->model_transaksi->list_transaksi()->result();

		$this->template->load('template','list_transaksi',$data);
		//$this->load->view('list_transaksi',$data);
	}

	function input(){
		$this->template->load('template','v_input_transaksi');
		//$this->load->view('v_input_transaksi');
	}

	function input_simpan(){
		$datatransaksi = array (
			'no_faktur' =>$this->input->post('no_faktur'),
			'tgl_faktur' =>$this->input->post('tgl_faktur'),
			'kd_pelanggan' =>$this->input->post('kd_pelanggan'),
			'id_user' =>$this->input->post('id_user'),
			'biaya_kirim' =>$this->input->post('biaya_kirim'),
			'total_bayar' =>$this->input->post('total_bayar'));

		$this->db->insert('t_transaksi',$datatransaksi);
		redirect('transaksi');
	}

	function edit(){
		$this->load->model('model_transaksi');
		$no_faktur = $this->uri->segment(3);
		$data['product'] = $this->model_transaksi->product($no_faktur)->row_array();

		$this->load->view('v_edit_transaksi',$data);
	}

	function edit_simpan(){
		$id = $this->input->post('id');
		$datatransaksi = array (
			'no_faktur' =>$this->input->post('no_faktur'),
			'tgl_faktur' =>$this->input->post('tgl_faktur'),
			'kd_pelanggan' =>$this->input->post('kd_pelanggan'),
			'id_user' =>$this->input->post('id_user'),
			'biaya_kirim' =>$this->input->post('biaya_kirim'),
			'total_bayar' =>$this->input->post('total_bayar'));
		$this->db->where('no_faktur',$id);
		$this->db->update('t_transaksi',$datatransaksi);
		redirect('transaksi');
	}

	function delete() {
		$no_faktur = $this->uri->segment(3);
		$this->db->where('no_faktur',$no_faktur);
		$this->db->delete('t_transaksi');
		redirect('transaksi');
	}

}
?>
