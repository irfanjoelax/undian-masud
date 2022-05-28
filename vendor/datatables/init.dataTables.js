$(document).ready(function () {
  $(".dataTable").DataTable({
    processing: true,
    serverside: true,
    ordering: false,
    language: {
      url: "vendor/datatables/Indonesian.json",
    },
  });
});
