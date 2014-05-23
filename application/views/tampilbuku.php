<?php

echo "<h2>Tampil data buku</h2>";
echo "<table border=1>";
echo "<tr><th>kode buku</th> <th>judul buku</th> <th> penerbit </th> <th> isbn </th> <th> stok buku </th><th>&nbsp;</th></tr>";
foreach ($databuku as $isi) {
    echo "<tr>";
    echo "<td>$isi->kode_buku</td>";
    echo "<td>$isi->judul_buku</td>";
    echo "<td>$isi->penerbit</td>";
    echo "<td>$isi->isbn</td>";
    echo "<td>$isi->stok_buku</td>";
    echo "<td>";
    echo anchor('perpustakaan/koreksi_buku/' . $isi->kode_buku, 'Edit') . " | ";
    echo anchor('perpustakaan/konfirm_hapus_buku/' . $isi->kode_buku, 'Hapus');
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<p>" . anchor('perpustakaan', 'Kembali') . "</p>";
?>