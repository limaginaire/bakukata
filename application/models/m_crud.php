<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_crud extends CI_Model {

    function M_crud() {
        parent:: __construct();
    }

    public function insert() {
        $this->id_kata = $this->input->post('id_kata');
        $this->kata_baku = $this->input->post('kata_baku');
        $this->kata_tidak_baku = $this->input->post('kata_tidak_baku');

        $this->db->insert('kata', $this);
        redirect('crud/sukses');
    }

}
?>