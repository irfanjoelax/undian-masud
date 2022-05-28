<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$nik        = $_POST['nik'];
$nama       = strtoupper($_POST['nama']);
$telepon    = $_POST['telepon'];

// proses query database
$query  = "INSERT INTO pelanggan SET
              nik_plg  = '$nik', 
              nm_plg   = '$nama', 
              tlp_plg  = '$telepon', 
              stts_plg = 0, 
              hdh_id    = 0
          ";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=konsumen');
exit;
