$(function () {
  $("#NominarTable")
    .DataTable({
      responsive: true,
      searching: false,
      lengthChange: false,
      autoWidth: false,
      ordering: true,
      info: false,
      paging: true,
      buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#NominarTable_wrapper .col-md-6:eq(0)");

  $("#UsersTable")
    .DataTable({
      responsive: true,
      searching: true,
      lengthChange: false,
      autoWidth: false,
      ordering: true,
      info: false,
      paging: true,
      buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#UsersTable_wrapper .col-md-6:eq(0)");
});
