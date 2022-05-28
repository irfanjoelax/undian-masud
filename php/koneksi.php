<?php

// setting format tanggal
date_default_timezone_set('Asia/Makassar');

// title aplikasi
$title   = "Rahmad Mas'ud Center";

// path aplikasi lokal
$path    = "http://localhost/undian-masud";

// path aplikasi hosting
// $path    = "http://appundian.ngapeh.co/";

// setting variabel untuk connet sql local
$host    = "localhost";
$user    = "root";
$pass    = "";
$db      = "undian_masud";

// setting variabel untuk connet sql hosting
// $host    = "localhost";
// $user    = "ngat9484_irfan";
// $pass    = "irfan020412";
// $db      = "ngat9484_undian";

// jalankan koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false) {
  echo "koneksi tidak berhasil";
}
