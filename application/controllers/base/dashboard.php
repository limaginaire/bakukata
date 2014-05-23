<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

    }

    public function index() {
        $this->load->view('link/home');
    }

    public function contact() {
        $this->load->view('link/contact');
    }

    public function about() {
        $this->load->view('link/about');
    }

    public function admin() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            //get data dari model
            $this->load->model('get_data');
            $data['kata_kata'] = $this->get_data->kata();
            $this->load->view('link/admin', $data);
        } else {
            //Jika tidak ada session di kembalikan ke halaman login
            redirect('base/dashboard/login');
        }
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('base/dashboard/admin');
        } else {
            $this->load->helper(array('form'));
            $this->load->view('link/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        //unset session CI framework
        $this->session->sess_destroy();
        //kembali ke admin, karena tidak ada session(di unset_session pada 2 baris diatas), halaman dikembalikan ke login
        redirect('base/dashboard/admin');
    }

    public function signup() {
        $this->load->view('link/signup');
    }

    //////////////////////////////////////////////////////////////////////
    /////////////////////// PROCESS ONLY /////////////////////////////////

    //hapus kata 
    public function delete(){
        $this->load->model('get_data');
        $id = $this->input->get('id');
        if($this->get_data->delete($id)) {
            echo '<script>';
            echo "alert('Berhasil Hapus Kata');";
            echo "window.location='./admin'";
            echo '</script>';
        } else {
            echo '<script>';
            echo "alert('Gagal Hapus Kata');";
            echo "window.location='./admin'";
            echo '</script>';
        }
    }

    //edit kata
    public function edit(){
        $this->load->model('get_data');
        $id = $this->input->post('id');
        $kb = $this->input->post('baku');
        $ktb = $this->input->post('tidak_baku');
        $params = array($kb,$ktb,$id);
        if($this->get_data->edit($params)) {
            echo '<script>';
            echo "alert('Berhasil Edit Kata');";
            echo "window.location='./admin'";
            echo '</script>';
        } else {
            echo '<script>';
            echo "alert('Gagal Edit Kata');";
            echo "window.location='./admin'";
            echo '</script>';
        }
    }

}

?>