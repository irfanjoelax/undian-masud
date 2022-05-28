<?php

// require file koneksi
require('koneksi.php');
require('bcrypt.php');

// tangkap inputan untuk di dekpripsi
$id = b_decode($_GET['id']);

// proses query delete
$query2  = "DELETE FROM agen WHERE id_agen = '$id'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=agen');
exit;
