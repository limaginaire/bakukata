<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_process extends CI_Controller {

    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model('user', '', TRUE);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session'));
    }

    function index() {
        //Aksi untuk melakukan validasi
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Jika validasi gagal user akan diarahkan kembali ke halaman login
            $this->load->view('link/login');
        } else {
            //Jika berhasil user akan di arahkan ke private area 
            redirect('base/dashboard/admin');
        }
    }

    function check_database($password) {
        //validasi field terhadap database 
        $username = $this->input->post('email');

        //query ke database
        $result = $this->user->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id_admin' => $row->id_admin,
                    'nama' => $row->nama,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}

?>