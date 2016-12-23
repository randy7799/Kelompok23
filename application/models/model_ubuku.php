<?php

class Model_ubuku extends CI_Model {

	function list_ubuku(){
		$ubuku = $this->db->get('t_buku');;
		return $ubuku;
	}

	function product($kd_buku){
		return $this->db->get_where('t_buku',array('kd_buku' =>$kd_buku));
	}

	public function caribuku($cari){
		$cari=$this->db->query("select * from t_buku where judul_buku like '%$cari%'  ");
		return $cari->result();
	}


}

?>
