<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

    function __construct() {
        parent::__construct();
        log_message('debug', 'Kelompok23 Admin CI : Auth class loaded');
    }

    function index() {
        $data['page'] = $this->config->item('kelompok23_admin_template_dir_public') . "login_form";
        $data['module'] = 'auth';
        $this->load->view($this->_container, $data);
    }
}