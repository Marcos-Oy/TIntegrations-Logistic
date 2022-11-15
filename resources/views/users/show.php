<?php echo $rows[1]; ?>
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
                                                <th>Teléfono</th>
                                                <th>Teléfono 2</th>
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
                                                <td><?= $row[1] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['fono1'] ?></td>
                                                <td><?= $row['fono2'] ?></td>
                                                <td><?= $row['desc_office'] ?></td>
                                                <td><?= $row['desc_cargo'] ?></td>
                                                <td><?= $row['fecha_nac'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $row['username']?>"
                                                        class="btn btn-warning">Editar</a>
                                                   
                                                    <form method='POST' action='?control=Users&action=Eliminarusuario'>
			                                        <button type='submit' name='username' value=<?=$row['username']?>>bye
                                                    </button>
                                                    </form>
                                                </td>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="id<?=$row['username']?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        ¿Desea eliminar el registro?</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Una vez eliminado no se podra recuperar el registro
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success"
                                                                        data-bs-dismiss="modal">Cerrar</button>
                                                                        <a href="delete.php?id=<?= $row['username']?>"
                                                                        class="btn btn-danger">Eliminar</a>
                                                                    <!-- <button type="button" >Eliminar</button> -->
                                                                </div>
                                                            </div>
                                                        </div>
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
            include 'resources/views/layouts/footer.php';
        ?>
</body>