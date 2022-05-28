function prosesUndian() {
  var acak = new Howl({
    src: ["./audio/acak.mp3"],
    volume: 0.4,
    loop: true,
  });

  var selesai = new Howl({
    src: ["./audio/selesai.mp3"],
    volume: 1,
  });

  // proses ajax jQuery
  $.ajax({
    type: "GET",
    url: "php/konsumen_terdaftar.php",
    dataType: "JSON",
    success: function (response) {
      // jika data peserta masih kosong
      if (response.toString() == "") {
        swal("Informasi!", "Data konsumen masih kosong", "info", {
          button: false,
          timer: 3000,
        });
        setInterval(function () {
          window.location.replace("undian_konsumen.php");
        }, 1000);
      }

      // jika data peserta ada
      else {
        acak.play();
        // show modal
        $("#prosesModal").modal("show");

        // tangkap data dari database
        let data = response[0];

        // set timeout loading aplikasi
        setTimeout(function () {
          // hide modal
          acak.stop();
          $("#prosesModal").modal("hide");

          // parsing ke view
          $("#nmPemenang").text("Nama: " + data.nm);
          $("#nikPemenang").text("NIK: " + data.nik);
          $("#btnSimpan").attr("onclick", "savePemenang(" + data.id + ")");

          selesai.play();

          setTimeout(function () {
            $("#popupModal").modal("show");
          }, 800);
        }, 8000);
      }
    },
  });
}

// fungsi simpan pemenang
function savePemenang(idPelanggan) {
  // ambil nilai dari ID Hadiah
  let hadiah = $("#idHdh").val();

  $.ajax({
    type: "POST",
    url: "php/pemenang_konsumen_simpan.php",
    data: {
      pelanggan: idPelanggan,
      id: hadiah,
    },
    success: function (response) {
      $("#popupModal").modal("hide");

      swal("Berhasil!", "Data pemenang telah berhasil disimpan", "success", {
        button: false,
        timer: 1000,
      });

      setInterval(function () {
        window.location.replace("undian_konsumen.php");
      }, 1000);
    },
  });
}
