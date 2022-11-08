<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>
    <?php
        include ('resources/views/layouts/dependencies.php');
        include 'resources/views/users/dependencies.php';
    ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include 'resources/views/layouts/navbar.php';
            include 'resources/views/layouts/aside.php';
        ?>
        <div class="content-wrapper">

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h2>
                                        Crear usuario
                                        <a href="../users/show.php" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="?control=Users&action=guardar">
                                        <div class="row">

                                            <!-- COLUMNA 1 -->

                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input id="nombre" type="text" name="nombre" class="form-control"
                                                        placeholder="Ingrese nombre aquí...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input id="paterno" name="paterno" type="text" class="form-control"
                                                        placeholder="Ingrese apellido paterno aquí...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input id="materno" name="materno" type="text" class="form-control"
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
                                                        <input id="tel1" name="tel1" type="number" class="form-control"
                                                            placeholder="Ingrese número aquí...">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Teléfono 2</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input id="tel2" name="tel2" type="number" class="form-control"
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
                                                        <input id="email" name="email" type="email" class="form-control"
                                                            placeholder="Ingrese email aquí...">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COLUMNA 3 -->


                                            <div class="col-sm-3">


                                                <div class="form-group">
                                                    <label>Seleccionar Oficina</label>
                                                    <select id="ofi" name="ofi" class="form-control">
                                                        <option selected>Seleccionar oficinas</option>

                                                        <?php foreach($rowsOficinas as $rowOficina): ?>
                                                        <option value="<?= $rowOficina[0] ?>"><?= $rowOficina[1] ?>
                                                        </option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Seleccionar Cargo</label>
                                                    <select id="cargo" name="cargo" class="form-control">

                                                        <option selected>Seleccionar Cargos</option>

                                                        <?php foreach($rowsCargos as $rowCargo): ?>
                                                        <option value="<?= $rowCargo[0] ?>"><?= $rowCargo[1] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Seleccionar fecha de nacimiento</label>
                                                    <input id="fechanac" name="fechanac" type="date"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <input type="submit" name="guardar" class="btn btn-success btn-lg"
                                                value="Guardar">
                                        </div>

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
        include 'resources/views/layouts/footer.php';
    ?>
</body>