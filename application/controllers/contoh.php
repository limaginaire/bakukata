<?php

class Contoh extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('model_contoh');
        $data['ambil_data'] = $this->model_contoh->mengambil_data();
        $data['judul'] = 'Retrive Data Di CI';
        $this->load->view('view_contoh', $data);
    }

}

?>