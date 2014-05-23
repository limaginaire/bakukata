<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            //get data
            $this->load->model('get_data');
            $data['kata_kata'] = $this->get_data->kata();
            $this->load->view('link/admin', $data);
        } else {
            //Jika tidak ada session di kembalikan ke halaman login
            redirect('base/login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('base/home', 'refresh');
    }

}

?>