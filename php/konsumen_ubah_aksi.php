<?php

// require file koneksi
require('koneksi.php');
require('bcrypt.php');

// tangkap inputan
$id         = b_decode($_GET['id']);
$nik        = $_POST['nik'];
$nama       = strtoupper($_POST['nama']);
$telepon    = $_POST['telepon'];

// proses query database
$query  = "UPDATE pelanggan SET 
              nik_plg  = '$nik', 
              nm_plg   = '$nama', 
              tlp_plg  = '$telepon'
            WHERE id_plg = '$id'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=konsumen');
exit;
