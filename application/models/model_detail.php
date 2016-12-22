<?php

class Model_detail extends CI_Model {

	function list_detail(){
		$detail = $this->db->get('t_detail');;
		return $detail;
	}

	function product($no_faktur){
		return $this->db->get_where('t_detail',array('no_faktur' =>$no_faktur));
	}
}

?>
