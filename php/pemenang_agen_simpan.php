<?php
// require file koneksi
require('koneksi.php');

// tangkap inputan no = nomer peserta & id = id hadiah
$agen = $_POST['agen'];
$id   = $_POST['id'];

// proses query update status peserta 
$query  = "UPDATE agen SET stts_agen = 1, hdh_id = '$id' WHERE id_agen = '$agen'";
mysqli_query($conn, $query) or die(mysqli_error($conn));

// proses query update jumlah hadiah
$query2  = "UPDATE hdh_agen SET jmlh_hdh = jmlh_hdh - 1 WHERE id_hdh = '$id'";
mysqli_query($conn, $query2) or die(mysqli_error($conn));
