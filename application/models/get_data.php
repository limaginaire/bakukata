<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Get_data extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function kata() {
        $query = $this->db->query('select * from kata ORDER BY id_kata DESC');
        //$query=$this->db->get('kata');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    //delete kata
    function delete($id){
        $query = "DELETE FROM kata WHERE id_kata = ?";
        if($this->db->query($query, $id)){
            return true;
        } else {
            return false;
        }
    }

    //edit data
    function edit($params){
        $query = "UPDATE kata SET kata_baku = ?, kata_tidak_baku = ? WHERE id_kata = ?";
        if($this->db->query($query, $params)){
            return true;
        } else {
            return false;
        }
    }

}
?>

