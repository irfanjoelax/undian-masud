<?php
$id     = b_decode($_GET['id']);
$query  = "SELECT * FROM agen WHERE id_agen = '$id'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$data   = mysqli_fetch_array($sql);
?>
<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Ubah Agen
    </h3>
    <hr class="bg-warning">
    <form action="<?= $path . '/php/agen_ubah_aksi.php?id=' . b_encode($data['id_agen']); ?>" method="POST">
      <div class="form-group row">
        <div class="col-3">
          <label for="nomer">No. Agen</label>
          <input type="text" class="form-control" name="nomer" value="<?= $data['no_agen']; ?>" required>
        </div>
        <div class="col-6">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" name="nik" value="<?= $data['nik_agen']; ?>" required>
        </div>
        <div class="col-3">
          <label for="prioritas">Prioritas</label>
          <select class="custom-select" name="prioritas" required>
            <option value="0" <?= ($data['prioritas_agen'] == '0') ? 'selected' : '' ?>>Bukan Prioritas</option>
            <option value="1" <?= ($data['prioritas_agen'] == '1') ? 'selected' : '' ?>>Prioritas</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-7">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?= $data['nm_agen']; ?>" required>
        </div>
        <div class="col-5">
          <label for="telepon">Telepon</label>
          <input type="text" class="form-control" name="telepon" value="<?= $data['tlp_agen']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-5">
          <label for="kecamatan">Kecamatan</label>
          <input type="text" class="form-control" name="kecamatan" value="<?= $data['kec_agen']; ?>" required>
        </div>
        <div class="col-5">
          <label for="kelurahan">Kelurahan</label>
          <input type="text" class="form-control" name="kelurahan" value="<?= $data['kel_agen']; ?>" required>
        </div>
        <div class="col-2">
          <label for="rt">RT</label>
          <input type="text" class="form-control" name="rt" value="<?= $data['rt_agen']; ?>" required>
        </div>
      </div>

      <button type="submit" class="btn btn-sm btn-warning"><i class="zmdi zmdi-save"></i>&nbsp;Simpan agen</button>
      <a href="?view=agen" class="btn btn-sm btn-dark"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>