<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Tambah konsumen
    </h3>
    <hr class="bg-warning">
    <form action="<?= $path . '/php/konsumen_tambah_aksi.php'; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-12">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="nama konsumen.." required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-6">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" name="nik" placeholder="NIK.." required>
        </div>
        <div class="col-6">
          <label for="telepon">Telepon</label>
          <input type="text" class="form-control" name="telepon" placeholder="telepon.." required>
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-warning"><i class="zmdi zmdi-save"></i>&nbsp;Simpan konsumen</button>
      <a href="?view=konsumen" class="btn btn-sm btn-dark"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>