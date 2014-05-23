<?php

class Model_contoh extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function mengambil_data() {
        $query = $this->db->query('select * from kata');
        //$query=$this->db->get('kata');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

}
?>