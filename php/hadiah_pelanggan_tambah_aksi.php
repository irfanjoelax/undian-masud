<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$nama     = $_POST['nama'];
$urut     = $_POST['urut'];
$jumlah   = $_POST['jumlah'];

// proses query database
$query  = "INSERT INTO hdh_plg SET nama_hdh = '$nama', urut_hdh = '$urut', jmlh_hdh = '$jumlah'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=hadiah-pelanggan');
exit;
