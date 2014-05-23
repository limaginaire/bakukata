<?php
echo "<h2>Konfirmasi hapus data buku</h2>";
echo "<p>Apakah data buku berikut ini akan dihapus?</p>";
echo "<table border=1>";
echo "<tr><th>kode buku</th> <th>judul buku</th> <th> penerbit </th> <th> isbn </th> <th> stok buku </th></tr>";
foreach ($databuku as $isi)
    {
    echo "<tr>";
            echo "<td>$isi->kode_buku</td>";
            echo "<td>$isi->judul_buku</td>";
            echo "<td>$isi->penerbit</td>";
            echo "<td>$isi->isbn</td>";
            echo "<td>$isi->stok_buku</td>";
    echo "</tr>";
    }
echo "</table>";
echo "<p>".anchor('perpustakaan/hapus_buku/'.$isi->kode_buku, 'Ya')." | ";
echo anchor('perpustakaan', 'Tidak')."</p>";
?>