<?php

class Model_upembelian extends CI_Model {

	function list_upembelian(){
		$upembelian = $this->db->get('t_transaksi');;
		return $upembelian;
	}

	function product($no_faktur){
		return $this->db->get_where('t_transaksi',array('no_faktur' =>$no_faktur));
	}
}

?>
