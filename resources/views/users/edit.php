<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
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
                        <div class="col-sm-9">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h2>
                                        Editar usuario
                                        <a href="?control=Users&action=Portal" class="justify-content-md-end">
                                            <button type="button" class="btn btn-secondary">
                                                Volver
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="?control=Users&action=Editarusuario">

                                        <div class="row">
                                            <?php while($rows = $resultado->fetch_assoc()) { ?>
                                            <!-- COLUMNA 1 -->
                                            <input type="hidden" value="<?php echo $rows['username'];?>"
                                                name="username">

                                            <input type="hidden" value="<?php echo $rows['activo'];?>" name="activo">

                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $rows['nombre'];?>" name="nombre">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $rows['paterno'];?>" name="paterno">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $rows['materno'];?>" name="materno">
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
                                                            value="<?php echo $rows['fono1'];?>" name="tel1">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Teléfono 2</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input type="number" class="form-control"
                                                            value="<?php echo $rows['fono2'];?>" name="tel2">
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
                                                            value="<?php echo $rows['email'];?>" name="email">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COLUMNA 3 -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Seleccionar Oficina</label>
                                                    <select class="form-control" name="ofi">

                                                        <?php foreach($rowsOficinas as $rowOficina): ?>
                                                        <option value="<?= $rowOficina['id'] ?>"
                                                            <?php if($rowOficina['desc_office']==$rows['desc_office']){echo " selected ";} ?>>
                                                            <?= $rowOficina['desc_office'] ?>
                                                        </option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Seleccionar Cargo</label>
                                                    <select class="form-control" name="cargo">

                                                        <?php foreach($rowsCargos as $rowCargo): ?>
                                                        <option value="<?= $rowCargo['idcargo'] ?>"
                                                            <?php if($rowCargo['nombre']==$rows['desc_cargo']){echo " selected ";} ?>>
                                                            <?= $rowCargo['nombre'] ?>
                                                        </option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Seleccionar fecha</label>
                                                    <input type="date" class="form-control"
                                                        value="<?php echo $rows['fecha_nac'];?>" name="fechanac">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <div class="col-sm-3">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h2>Contraseña
                                    </h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="?control=Users&action=PasswordReset">
                                        <input type="hidden" value="<?php echo $rows['username'];?>" name="username">
                                        <?php } ?>
                                        <button type="submit" class="btn btn-warning col-sm-12">⚠ Restablecer ⚠</button>
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