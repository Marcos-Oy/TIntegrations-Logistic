<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h2>Usuarios
                                        <a href="?control=Users&action=Crear" class="justify-content-md-end">
                                            <button type="button" class="btn btn-primary">
                                                Nuevo
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="UsersTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Nombre</th>
                                                <th>E-Mail</th>
                                                <th>Fono1</th>
                                                <th>Fono2</th>
                                                <th>Oficina</th>
                                                <th>Cargo</th>
                                                <th>Fecha de nac</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($rows): ?>
                                            <?php foreach($rows as $row): ?>
                                            <tr>
                                                <td><?= $row['username'] ?></td>
                                                <td><?= $row['nombre']." ".$row['paterno']." ".$row['materno'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['fono1'] ?></td>
                                                <td><?= $row['fono2'] ?></td>
                                                <td><?= $row['desc_office'] ?></td>
                                                <td><?= $row['desc_cargo'] ?></td>
                                                <td><?= $row['fecha_nac'] ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <form method='POST' action='?control=Users&action=Edit'>
                                                                <button class="btn btn-warning" type='submit'
                                                                    name='username' value=<?=$row['username']?>><i
                                                                        class="fas fa-pen" aria-hidden="true"></i>
                                                                </button>
                                                            </form>
                                                        </div>

                                                        <?php if($row['activo'] == 1): ?>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST'
                                                                action='?control=Users&action=Eliminarusuario'>

                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-sm-des<?=$row['username']?>">
                                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                                </button>

                                                                <div class="modal fade"
                                                                    id="modal-sm-des<?=$row['username']?>">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Desactivar
                                                                                    usuario
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>¿Desea desactivar el usuario de
                                                                                    <?= $row['nombre']." ".$row['paterno']." ".$row['materno'] ?>?
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-danger"
                                                                                    type='submit' name='username'
                                                                                    value=<?=$row['username']?>>
                                                                                    Aceptar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if($row['activo'] == 0): ?>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <form method='POST'
                                                                action='?control=Users&action=Activarusuario'>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-sm-act<?=$row['username']?>">
                                                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                                                </button>

                                                                <div class="modal fade"
                                                                    id="modal-sm-act<?=$row['username']?>">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Activar usuario
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>¿Desea activar el usuario de
                                                                                    <?= $row['nombre']." ".$row['paterno']." ".$row['materno'] ?>?
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer justify-content-between">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-success"
                                                                                    type='submit' name='username'
                                                                                    value=<?=$row['username']?>>
                                                                                    Aceptar
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>

                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">No hay registros actualmente</td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Nombre</th>
                                                <th>E-Mail</th>
                                                <th>Fono1</th>
                                                <th>Fono2</th>
                                                <th>Oficina</th>
                                                <th>Cargo</th>
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
            include 'resources/views/layouts/footer.php';
        ?>
</body>