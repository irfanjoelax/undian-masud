<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$no         = $_POST['nomer'];
$nik        = $_POST['nik'];
$nama       = strtoupper($_POST['nama']);
$telepon    = $_POST['telepon'];
$kecamatan  = strtoupper($_POST['kecamatan']);
$kelurahan  = strtoupper($_POST['kelurahan']);
$prioritas  = $_POST['prioritas'];
$rt         = $_POST['rt'];

// proses query database
$query  = "INSERT INTO agen SET 
              no_agen   = '$no', 
              nik_agen  = '$nik', 
              nm_agen   = '$nama', 
              kec_agen  = '$kecamatan', 
              kel_agen  = '$kelurahan', 
              rt_agen   = '$rt', 
              tlp_agen  = '$telepon', 
              stts_agen = 0, 
              prioritas_agen = '$prioritas', 
              hdh_id    = 0
          ";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=agen');
exit;
