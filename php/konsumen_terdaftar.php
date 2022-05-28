<?php

// require file koneksi
require('koneksi.php');


// proses query database
$query2 = "SELECT * FROM pelanggan WHERE stts_plg = 0 ORDER BY rand() LIMIT 1";
$sql    = mysqli_query($conn, $query2) or die(mysqli_error($conn));
$data   = array();

while ($list = mysqli_fetch_array($sql)) {
   $row = array();

   $row['id']  = $list['id_plg'];
   $row['nm']  = $list['nm_plg'];
   $row['nik']  = $list['nik_plg'];

   $data[] = $row;
};

// parsing JSON
echo json_encode($data);
