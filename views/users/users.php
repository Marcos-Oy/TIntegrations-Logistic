<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregar</title>
    <?php
    //include '../includes/plugins.php';
    ?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include '../layouts/navbar.php';
        include '../layouts/aside.php';
        ?>
        <div class="content-wrapper">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ingresar nuevo usuario</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="row">

                            <!-- COLUMNA 1 -->

                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="Ingrese nombre aquí...">
                                </div>
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input type="text" class="form-control"
                                        placeholder="Ingrese apellido paterno aquí...">
                                </div>
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input type="text" class="form-control"
                                        placeholder="Ingrese apellido materno aquí...">
                                </div>

                            </div>

                            <!-- COLUMNA 2 -->

                            <div class="col-sm-3">

                                <div class="form-group">
                                    <label>Teléfono 1</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                        </div>
                                        <input type="number" class="form-control" placeholder="Ingrese número aquí...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Teléfono 2</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                        </div>
                                        <input type="number" class="form-control" placeholder="Ingrese número aquí...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Correo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Ingrese email aquí...">
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNA 3 -->

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Seleccionar Oficina</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Seleccionar Cargo</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista de usuarios</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>E-Mail</th>
                                <th>Teléfono</th>
                                <th>Teléfono 2</th>
                                <th>Fecha de nac.</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Carlos Gaete</td>
                                <td>Administrador</td>
                                <td>carlos.gaete@tpqt.cl</td>
                                <td>963403223</td>
                                <td>933279376</td>
                                <td>1983-12-14</td>
                                <td>Editar - Eliminar</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Marcos Oyarzo</td>
                                <td>Repartidor</td>
                                <td>marcos.oyarzo@tpqt.cl</td>
                                <td>933279376</td>
                                <td>933279376</td>
                                <td>1997-01-30s</td>
                                <td>Editar - Eliminar</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>E-Mail</th>
                                <th>Teléfono</th>
                                <th>Teléfono 2</th>
                                <th>Fecha de nac.</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php
    include '../layouts/footer.php';
    ?>
    <script src="js/validarRUT.js"></script>
    <script type="text/javascript" src="js/order_new.js"></script>

    <!-- jQuery -->
    <script src="../../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../public/plugins/jszip/jszip.min.js"></script>
    <script src="../../public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../public/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>

</body>