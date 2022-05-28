<?php

// VIEW DATA UTAMA
if (isset($_GET['view'])) $view = $_GET['view'];
else $view = "beranda";

if ($view == "beranda") include("beranda.php");

// VIEW CRUD AGEN
elseif ($view == "agen") include("agen.php");
elseif ($view == "agen-tambah") include("agen_tambah.php");
elseif ($view == "agen-detail") include("agen_detail.php");
elseif ($view == "agen-ubah") include("agen_ubah.php");
elseif ($view == "agen-hapus") include("agen_hapus.php");
elseif ($view == "agen-import") include("agen_import.php");

// VIEW CRUD KONSUMEN
elseif ($view == "konsumen") include("konsumen.php");
elseif ($view == "konsumen-tambah") include("konsumen_tambah.php");
elseif ($view == "konsumen-detail") include("konsumen_detail.php");
elseif ($view == "konsumen-ubah") include("konsumen_ubah.php");
elseif ($view == "konsumen-hapus") include("konsumen_hapus.php");
elseif ($view == "konsumen-import") include("konsumen_import.php");

// VIEW CRUD HADIAH UNTUK AGEN
elseif ($view == "hadiah-agen") include("hadiah_agen.php");
elseif ($view == "hadiah-tambah-agen") include("hadiah_tambah_agen.php");
elseif ($view == "hadiah-ubah-agen") include("hadiah_ubah_agen.php");
elseif ($view == "hadiah-import-agen") include("hadiah_import_agen.php");

// VIEW CRUD HADIAH UNTUK PELANGGAN
elseif ($view == "hadiah-pelanggan") include("hadiah_pelanggan.php");
elseif ($view == "hadiah-tambah-pelanggan") include("hadiah_tambah_pelanggan.php");
elseif ($view == "hadiah-ubah-pelanggan") include("hadiah_ubah_pelanggan.php");
elseif ($view == "hadiah-import-pelanggan") include("hadiah_import_pelanggan.php");

// VIEW PEMENANG AGEN
elseif ($view == "pemenang-agen") include("agen_pemenang.php");
elseif ($view == "pemenang-agen-detail") include("agen_pemenang_detail.php");

// VIEW PEMENANG KONSUMEN
elseif ($view == "pemenang-konsumen") include("konsumen_pemenang.php");
elseif ($view == "pemenang-konsumen-detail") include("konsumen_pemenang_detail.php");
