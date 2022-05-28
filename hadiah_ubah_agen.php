<?php
$id     = b_decode($_GET['id']);
$query  = "SELECT * FROM hdh_agen WHERE id_hdh = '$id'";
$sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
$hdh    = mysqli_fetch_array($sql);
?>
<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Ubah Hadiah
    </h3>
    <hr class="bg-warning">
    <form action="<?= $path . '/php/hadiah_agen_ubah_aksi.php?id=' . b_encode($hdh['id_hdh']); ?>" method="POST">
      <div class=" form-group row">
        <div class="col-8">
          <label for="nama">Nama Hadiah</label>
          <input type="text" class="form-control" name="nama" value="<?= $hdh['nama_hdh']; ?>" required>
        </div>
        <div class="col-2">
          <label for="urut">Urutan</label>
          <input type="number" class="form-control" name="urut" value="<?= $hdh['urut_hdh']; ?>" required>
        </div>
        <div class="col-2">
          <label for="jumlah">Jumlah</label>
          <input type="number" class="form-control" name="jumlah" value="<?= $hdh['jmlh_hdh']; ?>" required>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-warning"><i class="zmdi zmdi-save"></i>&nbsp;Simpan Hadiah</button>
      <a href="?view=hadiah-agen" class="btn btn-sm btn-dark"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>