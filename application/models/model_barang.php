<?php

class Model_barang extends CI_Model {

	function list_barang(){
		$barang = array('sepatu','jam tangan','robot');
		return $barang;
	}
}

?>