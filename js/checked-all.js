function checkAll(element) {
  var checkboxes = document.getElementsByClassName("cekByID");

  if (element.checked) {
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].type == "checkbox") {
        checkboxes[i].checked = true;
      }
    }
  } else {
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].type == "checkbox") {
        checkboxes[i].checked = false;
      }
    }
  }
}

function deleteAll() {
  // $.ajax({
  //   type: "POST",
  //   url: "php/peserta_hapus_banyak.php",
  //   data: {
  //     no: $("input:checkbox[checked]").val(),
  //   },
  //   success: function (response) {
  //     console.log(response);
  //   },
  // });

  // console.log($("input[type=checkbox]:checked").val());
  $("#form-delete").submit();
}
