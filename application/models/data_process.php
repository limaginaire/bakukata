<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Data_process extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login_process() {
        $sql = "SELECT * FROM admin WHERE email='' AND password='MD5('$')' ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    
    public function input_data() {
        $sql = "INSERT INTO kata (id_kata, kata_tidak_baku,kata_baku) VALUES ('$', '$', '$')";
        $query = $this->bd->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    
    public function signup_process() {
        $sql = "INSERT INTO admin (id_admin, nama, email, password) VALUES ('$', '$', '$', MD5('$'))";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

}
?>