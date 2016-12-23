<?php

class Model_upembelian extends CI_Model {

	function list_upembelian(){
		$upembelian = $this->db->get('t_transaksi');;
		return $upembelian;
	}

	function product($kd_buku){
		//$this->db->select('*');
	//	$this->db->from('t_transaksi');
		//$this->db->join('t_buku','t_buku.kd_buku = t_transaksi.kd_buku');
		//$this->db->get_where('t_transaksi',array('kd_buku' =>$kd_buku));
		//return $query = $this->db->get($kdbuku);
		return $this->db->get_where('t_buku',array('kd_buku' =>$kd_buku));
	}
}

?>
