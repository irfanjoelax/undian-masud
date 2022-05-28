<div class="card shadow">
  <div class="card-body">
    <h3 class="text-warning">
      Detail Pemenang Agen
      <span class="float-right">
        <a href="?view=pemenang-agen" class="btn btn-sm btn-dark">
          <i class="zmdi zmdi-close"></i>&nbsp; Batal / Kembali
        </a>
      </span>
    </h3>
    <hr class="bg-warning">
    <?php
    $query  = "SELECT * FROM agen INNER JOIN hdh_agen ON agen.hdh_id=hdh_agen.id_hdh WHERE agen.no_agen = '$_GET[no]' LIMIT 1";
    $sql    = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $agen   = mysqli_fetch_array($sql);
    ?>
    <div class="card shadow">
      <div class="card-body">
        <table class="table table-borderless">
          <tr>
            <td width="180">No. Agen</td>
            <td width="5">:</td>
            <td><?= $agen['no_agen']; ?></td>
          </tr>
          <tr>
            <td width="180">Nama Agen</td>
            <td width="5">:</td>
            <td><?= $agen['nm_agen']; ?></td>
          </tr>
          <tr>
            <td width="180">NIK</td>
            <td width="5">:</td>
            <td><?= $agen['nik_agen']; ?></td>
          </tr>
          <tr>
            <td width="180">Kecamatan</td>
            <td width="5">:</td>
            <td><?= $agen['kec_agen']; ?></td>
          </tr>
          <tr>
            <td width="180">Kelurahan</td>
            <td width="5">:</td>
            <td><?= $agen['kel_agen']; ?></td>
          </tr>
          <tr>
            <td width="180">RT.</td>
            <td width="5">:</td>
            <td><?= $agen['rt_agen']; ?></td>
          </tr>
          <tr>
            <td width="180">Telepon</td>
            <td width="5">:</td>
            <td><?= $agen['tlp_agen']; ?></td>
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