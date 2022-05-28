<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Tambah Hadiah Pelanggan
    </h3>
    <hr class="bg-warning">
    <form action="<?= $path . '/php/hadiah_pelanggan_tambah_aksi.php'; ?>" method="POST">
      <div class=" form-group row">
        <div class="col-8">
          <label for="nama">Nama Hadiah</label>
          <input type="text" class="form-control" name="nama" placeholder="masukkan nama hadiah.." autofocus required>
        </div>
        <div class="col-2">
          <label for="urut">Urutan</label>
          <input type="number" class="form-control" name="urut" placeholder="0" required>
        </div>
        <div class="col-2">
          <label for="jumlah">Jumlah</label>
          <input type="number" class="form-control" name="jumlah" placeholder="0" required>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-warning"><i class="zmdi zmdi-save"></i>&nbsp;Simpan Hadiah</button>
      <a href="?view=hadiah-pelanggan" class="btn btn-sm btn-dark"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>