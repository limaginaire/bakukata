<?php

echo "<h2>Koreksi data buku</h2>";
echo form_open('perpustakaan/simpan_buku');
echo "<table align='left' width='100%'>";
$field1 = array('name' => 'kode_buku', 'size' => '15', 'value' => $databuku[0]->kode_buku);
echo "<tr><td width='10%'>Kode Buku</td><td width='1%'> :</td><td>" . form_input($field1) . "</td></tr>";

$field2 = array('name' => 'judul_buku', 'size' => '30', 'value' => $databuku[0]->judul_buku);
echo "<tr><td>Judul</td><td> :</td><td>" . form_input($field2) . "</td></tr>";

$field3 = array('name' => 'penerbit', 'size' => '30', 'value' => $databuku[0]->penerbit);
echo "<tr><td>Penerbit</td><td> :</td><td>" . form_input($field3) . "</td></tr>";

$field4 = array('name' => 'isbn', 'size' => '30', 'value' => $databuku[0]->isbn);
echo "<tr><td>ISBN</td><td> :</td><td>" . form_input($field4) . "</td></tr>";

$field5 = array('name' => 'stok_buku', 'size' => '11', 'value' => $databuku[0]->stok_buku);
echo "<tr><td>Stock</td><td> :</td><td>" . form_input($field5) . "</td></tr>";

echo form_hidden('mode', 'koreksi');
echo "<tr><td>" . form_submit('mysubmit', 'Simpan') . "</tr></td>";

echo "</table>";
echo form_close();
echo "<p>" . anchor('perpustakaan', 'Kembali') . "</p>";
?>