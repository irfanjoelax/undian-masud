<?php

// REQUIRE FILE KONEKSI
require('koneksi.php');

// REQUIRE FPDF
require_once '../vendor/autoload.php';

// SETTING & CONFIG
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P", "", "", "", "", "15", "15", "15", "15", "", "", "", "", "", "", "", "", "", "", "", "A4");

// SELECT DATA DARI DATABASE
$query  = "SELECT * FROM agen INNER JOIN hadiah ON agen.hdh_id=hadiah.id_hdh WHERE stts_agen = 1 ORDER BY id_agen DESC";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));

// SET KONTEN PDF DENGAN HTML
$konten = '<html><body><h1 align="center">DAFTAR PEMENANG AGEN</h1><table border="1" width="100%"><tr align="center"><td width="15%"><h4>No. Agen</h4></td><td width="35%"><h4>Nama Agen</h4></td><td width="50%"><h4>Hadiah</h4></td></tr>';

while ($data = mysqli_fetch_array($sql)) {
  $konten .= '<tr align="center"><td width="15%">' . $data['no_agen'] . '</td><td width="35%">' . $data['nm_agen'] . '</td><td width="50%">' . $data['nama_hdh'] . '</td></tr>';
}

$konten .= '</table></body></html>';

$mpdf->WriteHTML($konten);
$mpdf->Output('daftar_pemenang_agen.pdf', 'D');
