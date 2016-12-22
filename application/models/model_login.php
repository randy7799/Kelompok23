<?php
class Model_login extends CI_Model {
	function login($nama_user,$password_user){
		$chek = $this->db->get_where('t_user',array('nama_user'=>$nama_user,'password_user'=>md5($password_user)));
		if($chek->num_rows()>0){
			return 1;
		}else {
			return 0;
		}
	}
}
