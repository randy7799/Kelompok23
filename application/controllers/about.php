<?php
class About extends CI_Controller {
		function index() {
      $judul 		= "Tentang Kami";
      $data['judul'] 	= $judul;
		$this->template->load('templateu','v_about',$data);
	}

}
