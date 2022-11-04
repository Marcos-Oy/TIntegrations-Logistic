<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <?php
        include ('../layouts/dependencies.php');
        include '../nominar/dependencies.php';
    ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include '../layouts/navbar.php';
            include '../layouts/aside.php';
        ?>
        <div class="content-wrapper">



            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h2>
                                        Nominar órdenes
                                        <a href="#" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Filtrar
                                            </button>
                                        </a>
                                        <a href="#" class="justify-content-md-end">
                                            <button type="button" class="btn btn-success">
                                                Excel
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="row">

                                            <!-- COLUMNA 1 -->

                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Ingrese nombre aquí...">
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

                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <label>Teléfono 1</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input type="number" class="form-control"
                                                            placeholder="Ingrese número aquí...">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Teléfono 2</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input type="number" class="form-control"
                                                            placeholder="Ingrese número aquí...">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control"
                                                            placeholder="Ingrese email aquí...">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COLUMNA 3 -->

                                            <div class="col-sm-4">
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
                                                <div class="form-group">
                                                    <label>Seleccionar fecha</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h2 class="card-title">Nominar órdenes</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Seleccionar fecha</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Seleccionar fecha</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




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