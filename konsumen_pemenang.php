<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-warning">
      Daftar Pemenang Konsumen
    </h3>

    <hr class="bg-warning">

    <!-- tabel peserta -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped text-center dataTable">
            <thead>
              <tr>
                <th scope="row">Nama Konsumen</th>
                <th scope="row">Telepon</th>
                <th scope="row">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM pelanggan WHERE stts_plg = 1";
              $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while ($agen = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td><?= $agen['nm_plg']; ?></td>
                  <td><?= $agen['tlp_plg']; ?></td>
                  <td>
                    <a href="?view=pemenang-konsumen-detail&id=<?= $agen['id_plg']; ?>" class="btn btn-sm btn-warning"><i class="zmdi zmdi-eye"></i>&nbsp;Detail</a>
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