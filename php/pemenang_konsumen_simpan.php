<?php
// require file koneksi
require('koneksi.php');

// tangkap inputan no = nomer peserta & id = id hadiah
$pelanggan = $_POST['pelanggan'];
$id         = $_POST['id'];

// proses query update status peserta 
$query  = "UPDATE pelanggan SET stts_plg = 1, hdh_id = '$id' WHERE id_plg = '$pelanggan'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// proses query update jumlah hadiah
$query2  = "UPDATE hdh_plg SET jmlh_hdh = jmlh_hdh - 1 WHERE id_hdh = '$id'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));
