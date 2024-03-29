 
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }

    function index() {
        //Aksi untuk melakukan validasi
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Jika validasi gagal user akan diarahkan kembali ke halaman login
            $this->load->view('login_view');
        } else {
            //Jika berhasil user akan di arahkan ke private area 
            redirect('home', 'refresh');
        }
    }

    function check_database($password) {
        //validasi field terhadap database 
        $username = $this->input->post('email');

        //query ke database
        $result = $this->user->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}
?>


