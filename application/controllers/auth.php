<?php
/**
 *
 */
class Auth extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }

  function login(){
    # code...
    if(isset($_POST['submit'])){

      $nama_user = $this->input->post('nama_user');
      $password_user = $this->input->post('password_user');
      $hasil = $this->model_login->login($nama_user,$password_user);
      $this->session->userdata(array('status_login'=>'oke'));
      redirect('buku');
    }else {
          $this->template->load('template_login','form_login');
    }

  }

  function logout(){
    # code...
    $this->session->sess_destroy();
    redirect('auth/login');
  }
}

 ?>
