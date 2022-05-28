<div class="card shadow">
  <div class="card-body">
    <!-- label header -->
    <h3 class="text-warning">
      Daftar Pemenang Agen
      <!-- <span class="float-right">
        <a href="<?= $path . '/php/export_agen_excel.php'; ?>" class="btn btn-sm btn-success">
          <i class="zmdi zmdi-collection-item"></i>&nbsp; Export Excel
        </a>
        <a href="<?= $path . '/php/export_agen_pdf.php'; ?>" class="btn btn-sm btn-danger">
          <i class="zmdi zmdi-collection-pdf"></i>&nbsp; Export PDF
        </a>
      </span> -->
    </h3>

    <hr class="bg-warning">

    <!-- tabel peserta -->
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped text-center dataTable">
            <thead>
              <tr>
                <th scope="row">No. Agen</th>
                <th scope="row">Nama Agen</th>
                <th scope="row">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM agen WHERE stts_agen = 1";
              $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while ($agen = mysqli_fetch_array($sql)) :
              ?>
                <tr>
                  <td><?= $agen['no_agen']; ?></td>
                  <td><?= $agen['nm_agen']; ?></td>
                  <td>
                    <a href="?view=pemenang-agen-detail&no=<?= $agen['no_agen']; ?>" class="btn btn-sm btn-warning"><i class="zmdi zmdi-eye"></i>&nbsp;Detail</a>
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