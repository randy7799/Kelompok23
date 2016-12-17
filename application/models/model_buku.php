<?php

class Model_buku extends CI_Model {

	function list_buku(){
		$buku = $this->db->get('t_buku');;
		return $buku;
	}

	function product($kd_buku){
		return $this->db->get_where('t_buku',array('kd_buku' =>$kd_buku));
	}
}

?>