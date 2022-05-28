<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE PHPSPREADSHEET
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// SETTING & CONFIG
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('B1', 'No. Agen');
$sheet->setCellValue('C1', 'Nama Agen');
$sheet->setCellValue('D1', 'NIK');
$sheet->setCellValue('E1', 'Kecamatan');
$sheet->setCellValue('F1', 'Kelurahan');
$sheet->setCellValue('G1', 'RT');
$sheet->setCellValue('H1', 'Telepon');
$sheet->setCellValue('I1', 'Hadiah');

// set baris kedua untuk data 
$i = 2;

// select data dari database
$query  = "SELECT * FROM agen INNER JOIN hadiah ON agen.hdh_id=hadiah.id_hdh WHERE stts_agen = 1 ORDER BY id_agen DESC";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));

// insert data kedalam excel dengan perulangan
while ($data = mysqli_fetch_array($sql)) {
  $sheet->setCellValue('B' . $i, $data['no_agen']);
  $sheet->setCellValue('C' . $i, $data['nm_agen']);
  $sheet->setCellValue('D' . $i, $data['nik_agen']);
  $sheet->setCellValue('E' . $i, $data['kec_agen']);
  $sheet->setCellValue('F' . $i, $data['kel_agen']);
  $sheet->setCellValue('G' . $i, $data['rt_agen']);
  $sheet->setCellValue('H' . $i, $data['tlp_agen']);
  $sheet->setCellValue('I' . $i, $data['nama_hdh']);
  $i++;
}

// OUTPUT
$writer = new Xlsx($spreadsheet);

$filename = 'daftar_agen_pemenang';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
header('Cache-Control: max-age=0');

$proses = $writer->save('php://output');

if ($proses) {
  // REDIRECT
  header('Location: ' . $path . '/?view=pemenang-agen');
  exit;
}
