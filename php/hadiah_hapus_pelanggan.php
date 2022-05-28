<?php

// require file koneksi
require('koneksi.php');
include('bcrypt.php');

// tangkap inputan untuk di dekpripsi
$id = b_decode($_GET['id']);

// proses query delete
$query  = "DELETE FROM hdh_plg WHERE id_hdh = '$id'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '?view=hadiah-pelanggan');
exit;
