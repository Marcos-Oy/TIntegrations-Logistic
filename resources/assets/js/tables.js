$(function () {
  $("#NominarTable")
    .DataTable({
      responsive: true,
      searching: false,
      lengthChange: true,
      autoWidth: false,
      ordering: true,
      info: false,
      paging: true,
      //buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#NominarTable_wrapper .col-md-6:eq(0)");

  $("#UsersTable")
    .DataTable({
      responsive: true,
      searching: true,
      lengthChange: true,
      autoWidth: false,
      ordering: true,
      info: false,
      paging: true,
      //buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#UsersTable_wrapper .col-md-6:eq(0)");

  $("#ordenTable")
    .DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      buttons: [
        {
          extend: "copy",
          text: "copiar",
        },
        "csv",
        "excel",
        "pdf",
        {
          extend: "print",
          text: "imprimir",
        },
        {
          extend: "colvis",
          text: "columnas visibles",
        },
      ],
    })
    .buttons()
    .container()
    .appendTo("#ordenTable_wrapper .col-md-6:eq(0)");
});
