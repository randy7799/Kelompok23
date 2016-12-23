<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_login'); // Berfungsi untuk memanggil Login_model
	}

	// Berfungsi untuk menampilkan halaman login
	function index() {
		$data=array('title'=>'Login Administrator',
		'isi' =>'form_login');
		$this->template->load('templateu','form_login',$data);
		}

	// Berfungsi untuk melakukan validasi login
	function validasi() {
		$data=array(
			'nama_user'=>$this->input->post('nama_user'),
			'password_user'=>$this->input->post('password_user')
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->model_login->ambil_data($data);
		if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)

			// Berfungsi untuk menyimpan user data
			$sesi=$this->session->set_userdata($data);
			// Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
			redirect('buku');
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
			$this->template->load('templateu','login_gagal',$data);
		}
		}

	// Berfungsi untuk menghapus session atau logout
	function logout() {
		session_destroy();
		redirect('auth');
		}
}
