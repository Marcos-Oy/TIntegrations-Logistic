<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominaciones</title>
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
                        <div class="col-sm-12">
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
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Seleccionar Estado de la Orden</label>
                                                    <select class="form-control">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Seleccionar Región</label>
                                                    <select class="form-control">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Seleccionar</label>
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
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Fecha creación de orden</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Desde</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hasta</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Fecha creación de actividad</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Desde</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hasta</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Repartidor</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Seleccionar</label>
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
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Listado de nóminas</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="NominarTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ODT</th>
                                                <th>FECHA</th>
                                                <th>OFICINA</th>
                                                <th>REGIÓN</th>
                                                <th>COMUNA</th>
                                                <th>ESTADO ORDEN</th>
                                                <th>ACTIVIDAD</th>
                                                <th>USUARIO CREADOR</th>
                                                <th>UBICACIÓN</th>
                                                <th>REPARTIDOR</th>
                                                <th>VALOR FLETE</th>
                                                <th>TIPO PAGO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ODT</td>
                                                <td>FECHA</td>
                                                <td>OFICINA</td>
                                                <td>REGIÓN</td>
                                                <td>COMUNA</td>
                                                <td>ESTADO ORDEN</td>
                                                <td>ACTIVIDAD</td>
                                                <td>USUARIO CREADOR</td>
                                                <td>UBICACIÓN</td>
                                                <td>REPARTIDOR</td>
                                                <td>VALOR FLETE</td>
                                                <td>TIPO PAGO</td>
                                            </tr>
                                            <tr>
                                                <td>ODT</td>
                                                <td>FECHA</td>
                                                <td>OFICINA</td>
                                                <td>REGIÓN</td>
                                                <td>COMUNA</td>
                                                <td>ESTADO ORDEN</td>
                                                <td>ACTIVIDAD</td>
                                                <td>USUARIO CREADOR</td>
                                                <td>UBICACIÓN</td>
                                                <td>REPARTIDOR</td>
                                                <td>VALOR FLETE</td>
                                                <td>TIPO PAGO</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ODT</th>
                                                <th>FECHA</th>
                                                <th>OFICINA</th>
                                                <th>REGIÓN</th>
                                                <th>COMUNA</th>
                                                <th>ESTADO ORDEN</th>
                                                <th>ACTIVIDAD</th>
                                                <th>USUARIO CREADOR</th>
                                                <th>UBICACIÓN</th>
                                                <th>REPARTIDOR</th>
                                                <th>VALOR FLETE</th>
                                                <th>TIPO PAGO</th>
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
    </div>
    <?php
        include '../layouts/footer.php';
    ?>
</body>