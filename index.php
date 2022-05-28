<?php

// include file koneksi & bcrypt
include('php/koneksi.php');
include('php/bcrypt.php');

$query   = "SELECT * FROM agen";
$sql     = mysqli_query($conn, $query) or die(mysqli_error($conn));

$query2   = "SELECT * FROM pelanggan";
$sql2     = mysqli_query($conn, $query2) or die(mysqli_error($conn));

$query3   = "SELECT * FROM hdh_agen WHERE jmlh_hdh != 0";
$sql3     = mysqli_query($conn, $query3) or die(mysqli_error($conn));

$query5   = "SELECT SUM(jmlh_hdh) AS jumhadiah FROM hdh_agen";
$sql5     = mysqli_query($conn, $query5) or die(mysqli_error($conn));
$dataAgen = mysqli_fetch_array($sql5);

$query4   = "SELECT * FROM hdh_plg WHERE jmlh_hdh != 0";
$sql4     = mysqli_query($conn, $query4) or die(mysqli_error($conn));

$query6   = "SELECT SUM(jmlh_hdh) AS jumhadiah FROM hdh_plg";
$sql6     = mysqli_query($conn, $query6) or die(mysqli_error($conn));
$dataKons = mysqli_fetch_array($sql6);

$totalAgen              = mysqli_num_rows($sql);
$totalPelanggan         = mysqli_num_rows($sql2);
$totalHadiahAgen        = mysqli_num_rows($sql3);
$jumlahHadiahAgen       = $dataAgen['jumhadiah'];
$totalHadiahPelanggan   = mysqli_num_rows($sql4);
$jumlahHadiahPelanggan  = $dataKons['jumhadiah'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TITLE -->
  <title><?= $title; ?></title>

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?= $path . '/img/logo1.jpeg'; ?>" type="image/x-icon">

  <!-- CSS FILE -->
  <link rel="stylesheet" href="vendor/bootstrap4/bootstrap.css">
  <link rel="stylesheet" href="vendor/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="vendor/datatables/jquery.dataTables.min.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark border-bottom shadow py-3">
    <div class="container">
      <span class="navbar-brand my-2 h4 text-uppercase text-warning"><?= $title; ?></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-warning ml-2 my-2" href="<?= $path; ?>">
              <i class="zmdi zmdi-layers"></i>&nbsp; Beranda
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-warning ml-2 my-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="zmdi zmdi-refresh"></i>&nbsp; Undian
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="undian_agen.php" target="_blank">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Agen
              </a>
              <a class="dropdown-item" href="undian_konsumen.php" target="_blank">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Konsumen
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-warning ml-2 my-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="zmdi zmdi-mall"></i>&nbsp; Daftar Hadiah
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?view=hadiah-agen">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Agen
              </a>
              <a class="dropdown-item" href="?view=hadiah-pelanggan">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Konsumen
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-warning ml-2 my-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="zmdi zmdi-accounts-list"></i>&nbsp; Daftar Peserta
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?view=agen">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Agen
              </a>
              <a class="dropdown-item" href="?view=konsumen">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Konsumen
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-warning ml-2 my-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="zmdi zmdi-accounts-list-alt"></i>&nbsp; Daftar Pemenang
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?view=pemenang-agen">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Agen
              </a>
              <a class="dropdown-item" href="?view=pemenang-konsumen">
                <i class="zmdi zmdi-chevron-right"></i>&nbsp;Konsumen
              </a>
            </div>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <!-- KONTEN -->
  <section class="mb-4">
    <div class="container">
      <div class="row">
        <!-- PANEL KIRI -->
        <div class="col-lg-3 mt-4">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <h6 class="card-title">
                Total Agen:
                <span class="float-right"><i class="zmdi zmdi-accounts-alt"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalAgen); ?></h4>
            </div>
          </div>
          <div class="card bg-danger text-white mt-3">
            <div class="card-body">
              <h6 class="card-title">
                Total Konsumen:
                <span class="float-right"><i class="zmdi zmdi-account"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalPelanggan); ?></h4>
            </div>
          </div>
          <div class="card bg-success text-white mt-3">
            <div class="card-body">
              <h6 class="card-title">
                Hadiah Agen:
                <span class="float-right"><i class="zmdi zmdi-mall"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalHadiahAgen) . ' - ' . $jumlahHadiahAgen; ?></h4>
            </div>
          </div>
          <div class="card bg-primary text-white mt-3">
            <div class="card-body">
              <h6 class="card-title">
                Hadiah Konsumen:
                <span class="float-right"><i class="zmdi zmdi-mall"></i></span>
              </h6>
              <h4 class="text-center"><?= number_format($totalHadiahPelanggan) . ' - ' . $jumlahHadiahPelanggan; ?></h4>
            </div>
          </div>
        </div>

        <!-- PANEL KANAN Atau KONTEN UTAMA -->
        <div class="col-lg-9 mt-4">
          <?php include_once("php/konten.php"); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- JAVASCRIPT FILE -->
  <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap4/bootstrap.bundle.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/init.dataTables.js"></script>
  <script src="vendor/sweetalert/sweetalert.min.js"></script>
  <script src="js/upload-file.js"></script>
  <script src="js/checked-all.js"></script>
  <script src="js/undian.js"></script>
</body>

</html>