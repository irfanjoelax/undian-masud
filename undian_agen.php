<?php include('php/koneksi.php'); ?>
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
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark border-bottom shadow py-1">
    <div class="container justify-content-between">
      <a class="navbar-brand" href="#">
        <img class="rounded" src="<?= $path . '/img/logo1.jpeg'; ?>" width="100">
      </a>
      <span class="h3 text-uppercase text-warning"><?= $title; ?></span>
      <a class="navbar-brand" href="#">
        <img class="rounded" src="<?= $path . '/img/logo2.jpeg'; ?>" width="100">
      </a>
    </div>
  </nav>

  <!-- JUMBOTRON -->
  <div class="container">
    <div class="card bg-white mt-5 shadow text-center">
      <div class="card-body">
        <h4 class="display-4">UNDIAN AGEN</h4>
        <h3 class="font-weight-bold mb-5">Usaha Milik Rukun Tetangga - Rahmad Mas'ud Center</h3>
        <h4 class="mt-5">HADIAH</h4>
        <!-- <hr class="bg-warning my-4 mt-5 mb-5"> -->
        <?php
        $no     = 1;
        $query  = "SELECT * FROM hdh_agen WHERE jmlh_hdh != 0 ORDER BY urut_hdh ASC LIMIT 1";
        $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $hdh    = mysqli_fetch_array($sql);
        $jum    = mysqli_num_rows($sql);
        ?>
        <h2 class="font-weight-bolder text-warning"><?= ($jum > 0) ? $hdh['nama_hdh'] : 'Hadiah Telah Habis'; ?></h2>
        <input type="hidden" id="idHdh" value="<?= $hdh['id_hdh']; ?>">
        <button type="button" onclick="prosesUndian()" class="btn btn-warning rounded-pill btn-lg px-5 mt-2" <?= ($jum > 0) ? '' : 'disabled'; ?>>
          Acak Undian
        </button>
      </div>
    </div>
  </div>

  <!-- MODAL PROSES UNDIAN -->
  <div class="modal fade" id="prosesModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <img src="<?= $path . '/img/ball-loader.gif'; ?>" class="img-fluid" alt="Responsive image">
        <p class="mt-3 text-center text-dark">Sedang Proses Pengundian...</p>
      </div>
    </div>
  </div>

  <!-- MODAL POP UP PEMENANG UNDIAN -->
  <div class="modal" id="popupModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center py-5">
          <div class="row">
            <div class="col-3">
              <img src="<?= $path . '/img/logo1.jpeg'; ?>" class="img-fluid rounded" alt="Responsive image">
            </div>
            <div class="col-6">
              <h3 class="font-weight-bold text-warning">Selamat Untuk Pemenang!</h3>
              <h4><?= $hdh['nama_hdh'] ?></h4>
              <h2 class="mt-5 mb-3" id="noPemenang"></h2>
              <h3 class="mt-2 mb-2" id="nmPemenang"></h3>
              <hr class="bg-warning">
            </div>
            <div class="col-3">
              <img src="<?= $path . '/img/logo2.jpeg'; ?>" class="img-fluid rounded" alt="Responsive image">
            </div>
          </div>
          <div class="mt-0">
            <button type="button" id="btnSimpan" class="btn btn-warning">Simpan Pemenang</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT FILE -->
  <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap4/bootstrap.bundle.min.js"></script>
  <script src="vendor/sweetalert/sweetalert.min.js"></script>
  <script src="vendor/howler/howler.min.js"></script>
  <script src="js/undian-agen.js"></script>
</body>

</html>