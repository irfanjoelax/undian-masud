<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-warning">
      Daftar konsumen
      <span class="float-right ml-2">
        <button type="button" onclick="deleteAll()" class="btn btn-sm btn-danger">
          <i class="zmdi zmdi-delete"></i>&nbsp; Hapus Banyak
        </button>
      </span>
      <span class="float-right ml-2">
        <a href="?view=konsumen-import" class="btn btn-sm btn-success">
          <i class="zmdi zmdi-collection-item"></i>&nbsp; Import Excel
        </a>
      </span>
      <span class="float-right">
        <a href="?view=konsumen-tambah" class="btn btn-sm btn-warning">
          <i class="zmdi zmdi-plus"></i>&nbsp; Tambah
        </a>
      </span>
    </h3>

    <hr class="bg-warning">

    <!-- tabel konsumen -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <form action="<?= $path . '/php/konsumen_hapus_banyak.php'; ?>" method="post" id="form-delete">
            <table class="table table-striped text-center dataTable">
              <thead>
                <tr>
                  <th scope="row">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" onchange="checkAll(this)" type="checkbox" id="cekAll">
                    </div>
                  </th>
                  <th scope="row">Nama konsumen</th>
                  <th scope="row">Telepon</th>
                  <th scope="row">Status</th>
                  <th scope="row">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query  = "SELECT * FROM pelanggan ORDER BY id_plg DESC";
                $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
                while ($psrt = mysqli_fetch_array($sql)) :
                ?>
                  <tr>
                    <td>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input cekByID" name="id[]" type="checkbox" value="<?= $psrt['id_plg']; ?>">
                      </div>
                    </td>
                    <td><?= $psrt['nm_plg']; ?></td>
                    <td><?= $psrt['tlp_plg']; ?></td>
                    <td>
                      <?php
                      if ($psrt['stts_plg'] == 0) {
                        echo '<span class="badge badge-secondary">Belum beruntung</span>';
                      } elseif ($psrt['stts_plg'] == 1) {
                        echo
                          '<span class="badge badge-warning text-white">Menang</span>';
                      }
                      ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group">
                        <a href="?view=konsumen-ubah&id=<?= b_encode($psrt['id_plg']) ?>" class="btn btn-sm btn-warning"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                        <a href="<?= $path . '/php/konsumen_hapus.php?id=' . b_encode($psrt['id_plg']) ?>" class="btn btn-sm btn-dark"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
                      </div>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>