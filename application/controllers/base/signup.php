<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Signup extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_data');
        $this->load->database();

        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation'));
    }

    public function signup_process() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //validasi
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[30]|is_unique[admin.nama]|callback_name_check|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[admin.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|md5');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]|md5');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('link/signup');
        } else {
            //insert to database
            $cek = $this->input->post('email');
            if ($cek != '') {
                //insert_data = class model, add_admin = function insert_data
                $this->insert_data->add_admin();
                echo '<script>';
                echo "alert('Anda Berhasil Mendaftar, Silahkan Masuk');";
                echo "window.location='../dashboard/login'";
                echo '</script>';
            }
        }
    }

    public function name_check($str) {
        if ($str == 'administrator') {
            $this->form_validation->set_message('name_check', 'Tidak boleh menggunakan %s "administrator"');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function signup_input() {
        $this->load->model('insert_data');
        $data['data_admin'] = $this->insert_data->add_admin();
        echo "Berhasil tambah admin";
    }
}

?>