<?php

// require file koneksi & bcrypt
require('koneksi.php');
require('bcrypt.php');

// tangkap inputan
$id       = b_decode($_GET['id']);
$nama     = $_POST['nama'];
$urut     = $_POST['urut'];
$jumlah   = $_POST['jumlah'];

// proses query database
$query2  = "UPDATE hdh_plg SET nama_hdh = '$nama', urut_hdh = '$urut', jmlh_hdh = '$jumlah' WHERE id_hdh = '$id'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=hadiah-pelanggan');
exit;
