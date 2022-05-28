<?php

// require file koneksi
require('koneksi.php');

// tangkap inputan
$id  = $_POST['id'];

// proses query delete
$query  = "DELETE FROM pelanggan WHERE id_plg IN(" . implode(',', $id) . ")";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// redirect
header('Location: ' . $path . '/?view=konsumen');
exit;
