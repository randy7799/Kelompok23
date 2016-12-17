<?php

class Model_transaksi extends CI_Model {

	function list_transaksi(){
		$transaksi = $this->db->get('t_transaksi');;
		return $transaksi;
	}

	function product($no_faktur){
		return $this->db->get_where('t_transaksi',array('no_faktur' =>$no_faktur));
	}
}

?>