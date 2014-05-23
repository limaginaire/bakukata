<h1><?php echo $judul; ?></h1>
<?php
foreach ($ambil_data as $baris) {
    echo $baris->id_kata . " | ";
    echo $baris->kata_baku . " | ";
    echo $baris->kata_tidak_baku . " | ";
}
?>