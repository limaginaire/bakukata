<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Insert extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_data');
        $this->load->database();

        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session'));
    }

    function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //validasi
        $this->form_validation->set_rules('baku', 'baku', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tidak_baku', 'tidak_baku', 'trim|required|is_unique[kata.kata_tidak_baku]|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            //session
            if ($this->session->userdata('logged_in')) {
                $session_data = $this->session->userdata('logged_in');
                $data['email'] = $session_data['email'];
                //get data
                $this->load->model('get_data');
                $data['kata_kata'] = $this->get_data->kata();
                $this->load->view('link/admin', $data);
            } else {
                //Jika tidak ada session di kembalikan ke halaman login
                //redirect('base/dashboard/logout', 'refresh');
                redirect('base/dashboard/login');
            }
        } else {
            //insert to database
            $cek = $this->input->post('tidak_baku');
            $cek = $this->input->post('baku');
            if ($cek != '') {
                $this->insert_data->add_kata();
                echo '<script>';
                echo "alert('Berhasil Menambah Kata');";
                echo "window.location='dashboard/admin'";
                echo '</script>';
            }
        }
    }
}
?>

