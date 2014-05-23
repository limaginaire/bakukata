<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class rewriter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Disable error reporting
        error_reporting(0);
    }

    public function index() { //process input and show output
        if($_POST['artikel']) {
            $artikel = nl2br($_POST['artikel']); //artikel yang dikirim merubah /n menjadi /br
            $ar = explode(" ", $artikel); //evolution to array
            $hasil = " ";
            foreach ($ar as $value)  {
                if (!preg_match("/\.|'/", $value)) { //jika ditemukan simbol seperti ini.
                    $query = mysql_query("select * from kata where kata_tidak_baku='$value'");
                    $j = mysql_num_rows($query);
                    if ($j > 0) {
                        $ka = mysql_fetch_array($query);
                //stripslashes digunakan untuk 
                        $hasil = $hasil . "<span class='re'> " . stripslashes($ka['kata_baku']) . "</span> ";
                    } else {
                        $hasil = $hasil." ".$value;
                    }
                } else {
                    $ka = preg_replace("/\./", "", $value);
                    $query = mysql_query("select * from id_sinonim where kata_tidak_baku='$ka'");
                    $j = mysql_num_rows($query);
                    if ($j > 0) {
                        $kax = mysql_fetch_array($query);
                        $hasil = $hasil . "<span class='re'> " . stripslashes($kax['kata_baku']) . "</span>. ";
                    } else {
                        $hasil = $hasil . stripslashes($ka) . ". ";
                    }
                }
            }
            echo "$hasil";

        } else { //if input not found
            echo '<script>';
            echo "alert('Anda Lupa Mengetikkan Kata');";
            echo '</script>';
        }
    }

    //menampilkan total kata yang diubah
    public function count_kata(){
     if($_POST['artikel']) {
            $artikel = nl2br($_POST['artikel']); //artikel yang dikirim merubah /n menjadi /br
            $ar = explode(" ", $artikel); //evolution to array
            $count = 0;
            foreach ($ar as $value)  {
                if (!preg_match("/\.|'/", $value)) { //jika ditemukan simbol seperti ini.
                    $query = mysql_query("select * from kata where kata_tidak_baku='$value'");
                    $j = mysql_num_rows($query);
                }  
                $count = $count + $j;
            }
            echo $count." kata telah berubah";
        }
    }
}