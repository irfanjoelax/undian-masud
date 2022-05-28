<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-warning">
      Daftar Hadiah Pelanggan
      <!-- <span class="float-right ml-2">
        <a href="?view=hadiah-import-pelanggan" class="btn btn-sm btn-success">
          <i class="zmdi zmdi-collection-item"></i>&nbsp; Import Excel
        </a>
      </span> -->
      <span class="float-right">
        <a href="?view=hadiah-tambah-pelanggan" class="btn btn-sm btn-warning">
          <i class="zmdi zmdi-plus"></i>&nbsp; Tambah
        </a>
      </span>
    </h3>

    <hr class="bg-warning">

    <!-- tabel hadiah -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped dataTable">
            <thead>
              <tr>
                <th width="40">No.</th>
                <th>Hadiah</th>
                <th width="40" class="text-center">Urutan</th>
                <th width="40" class="text-center">Jumlah</th>
                <th width="120" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no     = 1;
              $query  = "SELECT * FROM hdh_plg ORDER BY urut_hdh ASC";
              $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while ($psrt = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td><?= $psrt['nama_hdh']; ?></td>
                  <td class="text-center"><?= $psrt['urut_hdh']; ?></td>
                  <td class="text-center"><?= $psrt['jmlh_hdh']; ?></td>
                  <td class="text-center">
                    <div class="btn-group" role="group">
                      <a href="?view=hadiah-ubah-pelanggan&id=<?= b_encode($psrt['id_hdh']); ?>" class="btn btn-sm btn-warning"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                      <a href="<?= $path . '/php/hadiah_hapus_pelanggan.php?id=' . b_encode($psrt['id_hdh']); ?>" class="btn btn-sm btn-dark"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
                    </div>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>