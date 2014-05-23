<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud extends CI_Controller {

    function Crud() {
        parent:: __construct();
        $this->load->database();
        $this->load->model('m_crud');
    }

    public function insert() {
        $cek = $this->input->post('kata_baku');
        if ($cek != '') {
            $this->m_crud->insert();
        }
        $this->load->view('v_crud');
    }

    public function sukses() {
        echo "Berhasil Menambah Data";
    }

}
?>