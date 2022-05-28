<?php
$id     = b_decode($_GET['id']);
$query  = "SELECT * FROM pelanggan WHERE id_plg = '$id'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$data   = mysqli_fetch_array($sql);
?>
<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Ubah Agen
    </h3>
    <hr class="bg-warning">
    <form action="<?= $path . '/php/konsumen_ubah_aksi.php?id=' . b_encode($data['id_plg']); ?>" method="POST">
      <div class="form-group row">
        <div class="col-12">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?= $data['nm_plg']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-6">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" name="nik" value="<?= $data['nik_plg']; ?>" required>
        </div>
        <div class="col-6">
          <label for="telepon">Telepon</label>
          <input type="text" class="form-control" name="telepon" value="<?= $data['tlp_plg']; ?>" required>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-warning"><i class="zmdi zmdi-save"></i>&nbsp;Simpan agen</button>
      <a href="?view=konsumen" class="btn btn-sm btn-dark"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>