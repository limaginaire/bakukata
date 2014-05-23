<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  $id_kata = array(
  'name' => 'id_kata',
  'id' => 'id_kata',
  'value' => '',
  'maxlength' => '100',
  'size' => '50',
  'style' => 'width:50%',
  'validation' => 'required',
  );

  $kata_baku = array(
  'name' => 'kata_baku',
  'id' => 'kata_baku',
  'value' => '',
  'maxlength' => '100',
  'size' => '50',
  'style' => 'width:50%',
  );

  $kata_tidak_baku = array(
  'name' => 'kata_tidak_baku',
  'id' => 'kata_tidak_baku',
  'value' => '',
  'maxlength' => '100',
  'size' => '50',
  'style' => 'width:50%',
  );
 */
$this->load->helper('form');
echo form_open('crud/insert');
echo "<h3>Tambah Data</h3>";
echo "<table border='0' class='tabledetail'>";
echo "<tr>" . "<td>" . form_label('kata_baku') . "</td>" . "<td>" . form_input('kata_baku') . "</td>" . "</tr>";
echo "<tr>" . "<td>" . form_label('kata_tidak_baku') . "</td>" . "<td>" . form_input('kata_tidak_baku') . "</td>" . "</tr>";
echo "<tr>" . "<td>" . form_submit('mysubmit', 'simpan') . "</td>" . "<td>";
echo "</table>";
echo form_close();
?>