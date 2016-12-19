<?php
class Detail extends CI_Controller {

	function index() {
		$this->load->model('model_detail');
		$judul 		= "Daftar Detail";
		$data['judul'] 	= $judul;
		$data['detail'] = $this->model_detail->list_detail()->result();
		$this->template->load('template','list_detail',$data);
		//$this->load->view('list_detail',$data);
	}

	function input(){
		$this->template->load('template','v_input_detail');
		//$this->load->view('v_input_detail');
	}

	function input_simpan(){
		$datadetail = array (
			'no_faktur' =>$this->input->post('no_faktur'),
			'kd_buku' =>$this->input->post('kd_buku'),
			'jumlah_beli' =>$this->input->post('jumlah_beli'),
			'total_harga' =>$this->input->post('total_harga'));

		$this->db->insert('t_detail',$datadetail);
		redirect('detail');
	}

	function edit(){
		$this->load->model('model_detail');
		$no_faktur = $this->uri->segment(3);
		$data['product'] = $this->model_detail->product($no_faktur)->row_array();
		$this->template->load('template','v_edit_detail',$data);
		//$this->load->view('v_edit_detail',$data);
	}

	function edit_simpan(){
		$id = $this->input->post('id');
		$datadetail = array (
			'no_faktur' =>$this->input->post('no_faktur'),
			'kd_buku' =>$this->input->post('kd_buku'),
			'jumlah_beli' =>$this->input->post('jumlah_beli'),
			'total_harga' =>$this->input->post('total_harga'));

		$this->db->where('no_faktur',$id);
		$this->db->update('t_detail',$datadetail);
		redirect('detail');
	}

	function delete() {
		$no_faktur = $this->uri->segment(3);
		$this->db->where('no_faktur',$no_faktur);
		$this->db->delete('t_detail');
		redirect('detail');
	}

}
?>
