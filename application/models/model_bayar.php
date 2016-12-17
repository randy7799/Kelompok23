<?php

class Model_bayar extends CI_Model {

	function list_bayar(){
		$bayar = $this->db->get('t_bayar');;
		return $bayar;
	}

	function product($no_faktur){
		return $this->db->get_where('t_bayar',array('no_faktur' =>$no_faktur));
	}
}

?>