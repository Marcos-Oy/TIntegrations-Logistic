<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <?php
        include ('../layouts/dependencies.php');
        include '../users/dependencies.php';
    ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include '../layouts/navbar.php';
            include '../layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h2>Usuarios
                                        <a href="../users/create.php" class="justify-content-md-end">
                                            <button type="button" class="btn btn-success">
                                                Nuevo
                                            </button>
                                        </a>
                                    </h2>
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
                                                <th>Fecha de nac</th>
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
                                                <td>963403223</td>
                                                <td>1983-12-14</td>
                                                <td>
                                                    <a href="../users/edit.php"">
                                                        <button type=" button" class="btn btn-warning">
                                                        Editar
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Marcos Oyarzo</td>
                                                <td>Repartidor</td>
                                                <td>marcos.oyarzo@tpqt.cl</td>
                                                <td>933279376</td>
                                                <td>933279376</td>
                                                <td>1997-01-30</td>
                                                <td>
                                                    <a href="../users/edit.php"">
                                                        <button type=" button" class="btn btn-warning">
                                                        Editar
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                                </td>
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
                                                <th>Fecha de nac</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php
            include '../layouts/footer.php';
        ?>
</body>