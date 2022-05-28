<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE PHPSPREADSHEET
require_once '../vendor/autoload.php';

// INIT VARIABEL FILE
$fileName  = $_FILES['excel']['name'];
$fileTemp  = $_FILES['excel']['tmp_name'];

// SET & CONFIG 
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($fileTemp);
$spreadSheet = $reader->load($fileTemp);
$worksheet = $spreadSheet->getActiveSheet();
$rows = $worksheet->toArray();

// HAPUS BARIS PERTAMA
unset($rows[0]);

// LOOP UNTUK INSERT DATABASE
foreach ($rows as $key => $value) {
   $nama       = ucwords($value[0]);
   $urut       = $value[1];
   $jumlah     = $value[2];

   $query  = "INSERT INTO hdh_plg SET 
                  nama_hdh  = '$nama', 
                  urut_hdh  = '$urut', 
                  jmlh_hdh  = '$jumlah'
               ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
}

// REDIRECT
header('Location: ' . $path . '/?view=hadiah-pelanggan');
exit;
