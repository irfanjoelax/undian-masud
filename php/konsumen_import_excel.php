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

  $nama       = strtoupper($value[0]);
  $nik        = $value[1];
  $telepon    = $value[2];

  $query  = "INSERT INTO pelanggan SET 
                nik_plg  = '$nik', 
                nm_plg   = '$nama', 
                tlp_plg  = '$telepon', 
                stts_plg = 0, 
                hdh_id    = 0
  ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
}

// REDIRECT
header('Location: ' . $path . '/?view=konsumen');
exit;
