<?php

class Perpustakaan extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('perpustakaan');
    }

    function tampil_buku() {
        $kode = 'all';
        $this->load->model('buku');
        $data_buku['databuku'] = $this->buku->tampil_data_buku($kode);
        $this->load->view('tampilbuku', $data_buku);
    }

    function tambah_buku() {
        $this->load->view('tambahbuku');
    }

    function simpan_buku() {
        if (isset($_POST['mysubmit'])) {
            $data = array(
                'kode_buku' => $this->input->post('kode_buku'),
                'judul_buku' => $this->input->post('judul_buku'),
                'penerbit' => $this->input->post('penerbit'),
                'isbn' => $this->input->post('isbn'),
                'stok_buku' => $this->input->post('stok_buku'),
                'mode' => $this->input->post('mode')
            );
            $this->load->model('buku');
            $hasil = $this->buku->simpan_data_buku($data);
            if ($hasil) {
                echo "Simpan data berhasil";
            } else {
                echo "Simpan data gagal";
            }
            echo "<br/>";
            echo anchor('perpustakaan', 'Kembali');
        }
    }

    function koreksi_buku($kd) {
        $this->load->model('buku');
        $data_buku['databuku'] = $this->buku->tampil_data_buku($kd);
        $this->load->view('koreksibuku', $data_buku);
    }

    function konfirm_hapus_buku($kd) {
        $this->load->model('buku');
        $data_buku['databuku'] = $this->buku->tampil_data_buku($kd);
        $this->load->view('konfirmhapus', $data_buku);
    }

    function hapus_buku($kd) {
        $this->load->model('buku');
        $hasil = $this->buku->hapus_data_buku($kd);
        if ($hasil) {
            echo "Hapus data berhasil";
        } else {
            echo "Hapus data gagal";
        }
        echo "<br/>";
        echo anchor('perpustakaan', 'Kembali');
    }

}

?>