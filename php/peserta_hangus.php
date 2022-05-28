<?php
// require file koneksi
require('koneksi.php');

// tangkap inputan no = nomer peserta & id = id hadiah
$no = $_POST['no'];

// proses query update status peserta 
$query  = "UPDATE peserta SET stts_psrt = 2 WHERE no_psrt = '$no'";
mysqli_query($conn, $query) or die(mysqli_error($conn));
