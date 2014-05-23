<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class User extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function login($username, $password) {
        $this->db->select('id_admin, nama, email, password');
        $this->db->from('admin');
        $this->db->where('email', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
?>

