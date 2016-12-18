<?php

class Model_pelanggan extends CI_Model {

	function list_pelanggan(){
		$pelanggan = $this->db->get('t_pelanggan');;
		return $pelanggan;
	}

	function product($kd_pelanggan){
		return $this->db->get_where('t_pelanggan',array('kd_pelanggan' =>$kd_pelanggan));
	}
}

?>