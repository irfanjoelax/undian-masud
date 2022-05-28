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

  $nik        = $value[0];
  $nama       = strtoupper($value[1]);
  $kecamatan  = strtoupper($value[2]);
  $kelurahan  = strtoupper($value[3]);
  $rt         = $value[4];
  $telepon    = $value[5];
  $no         = $value[6];
  $prioritas  = $value[7];

  $query  = "INSERT INTO agen SET 
                no_agen   = '$no', 
                nik_agen  = '$nik', 
                nm_agen   = '$nama', 
                kec_agen  = '$kecamatan', 
                kel_agen  = '$kelurahan', 
                rt_agen   = '$rt', 
                tlp_agen  = '$telepon', 
                stts_agen = 0, 
                prioritas_agen = '$prioritas', 
                hdh_id    = 0
  ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
}

// REDIRECT
header('Location: ' . $path . '/?view=agen');
exit;
