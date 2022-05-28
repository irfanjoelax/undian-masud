<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Detail Pemenang Konsumen
      <span class="float-right">
        <a href="?view=pemenang-konsumen" class="btn btn-sm btn-dark">
          <i class="zmdi zmdi-close"></i>&nbsp; Batal / Kembali
        </a>
      </span>
    </h3>
    <hr class="bg-warning">
    <?php
    $query  = "SELECT * FROM pelanggan INNER JOIN hdh_plg ON pelanggan.hdh_id=hdh_plg.id_hdh WHERE pelanggan.id_plg = '$_GET[id]' LIMIT 1";
    $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $agen   = mysqli_fetch_array($sql);
    ?>
    <div class="card shadow">
      <div class="card-body">
        <table class="table table-borderless">
          <tr>
            <td width="180">NIK</td>
            <td width="5">:</td>
            <td><?= $agen['nik_plg']; ?></td>
          </tr>
          <tr>
            <td width="180">Nama Konsumen</td>
            <td width="5">:</td>
            <td><?= $agen['nm_plg']; ?></td>
          </tr>
          <tr>
            <td width="180">Telepon</td>
            <td width="5">:</td>
            <td><?= $agen['tlp_plg']; ?></td>
          </tr>
          <tr>
            <td width="180">Hadiah</td>
            <td width="5">:</td>
            <td><span class="badge badge-warning"><?= $agen['nama_hdh']; ?></span></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>