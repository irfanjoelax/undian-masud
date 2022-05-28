<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Tambah Agen
    </h3>
    <hr class="bg-warning">
    <form action="<?= $path . '/php/agen_tambah_aksi.php'; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-3">
          <label for="nomer">No. Agen</label>
          <input type="text" class="form-control" name="nomer" placeholder="No. agen.." autofocus required>
        </div>
        <div class="col-6">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" name="nik" placeholder="NIK.." required>
        </div>
        <div class="col-3">
          <label for="prioritas">Prioritas</label>
          <select class="custom-select" name="prioritas" required>
            <option value="0">Bukan Prioritas</option>
            <option value="1">Prioritas</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-7">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="nama agen.." required>
        </div>
        <div class="col-5">
          <label for="telepon">Telepon</label>
          <input type="text" class="form-control" name="telepon" placeholder="telepon.." required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-5">
          <label for="kecamatan">Kecamatan</label>
          <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan.." required>
        </div>
        <div class="col-5">
          <label for="kelurahan">Kelurahan</label>
          <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan.." required>
        </div>
        <div class="col-2">
          <label for="rt">RT</label>
          <input type="text" class="form-control" name="rt" placeholder="RT.." required>
        </div>
      </div>

      <button type="submit" class="btn btn-sm btn-warning"><i class="zmdi zmdi-save"></i>&nbsp;Simpan agen</button>
      <a href="?view=agen" class="btn btn-sm btn-dark"><i class="zmdi zmdi-close"></i>&nbsp;Batal / Kembali</a>
    </form>
  </div>
</div>