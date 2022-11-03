<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
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

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h2>
                                        Editar usuario
                                        <a href="../users/show.php" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
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
                                        <button type="button" class="btn btn-success btn-lg">Guardar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <div class="col-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h2>
                                        Editar Contraseña
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nueva contraseña</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Ingrese contrseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirmar Contraseña</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirme contraseña...">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-lg">Guardar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
        include '../layouts/footer.php';
    ?>
</body>