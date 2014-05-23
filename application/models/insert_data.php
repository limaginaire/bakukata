<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Insert_data extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function add_admin() {
        //nama, email, password adalah nama field pada form
        $this->id_admin = $this->input->post('id_admin');
        $this->nama = $this->input->post('nama');
        $this->email = $this->input->post('email');
        $this->password = $this->input->post('password');

        //admin adalah nama tabel
        $this->db->insert('admin', $this);
    }

    function add_kata() {
        //tidak_baku, baku = nama field pada form
        $this->kata_tidak_baku = $this->input->post('tidak_baku');
        $this->kata_baku = $this->input->post('baku');

        $this->db->insert('kata', $this);
    }

}
?>

