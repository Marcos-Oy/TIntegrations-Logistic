<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Datos</title>
    <?php
        include ('resources/views/layouts/dependencies.php');
        include ('resources/views/MisDatos/dependencies.php')
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
                        <div class="col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Mis Datos</h2>
                                    <div
                                        class="custom-control custom-switch d-grid gap-2 d-md-flex justify-content-md-end">
                                        <h2 class="card-title">Habilitar edición</h2>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" class="custom-control-input" id="Hedit"
                                            onclick="SwitchCheckBox()">
                                        <label class="custom-control-label" for="Hedit"></label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="?control=MisDatos&action=EditarMisDatos">
                                        <div class="row">
                                            <?php while($rows = $resultado->fetch_assoc()) { ?>
                                            <!-- COLUMNA 1 -->
                                            <input type="hidden" value="<?php echo $rows['username'];?>"
                                                name="username">

                                            <input type="hidden" value="<?php echo $rows['activo'];?>" name="activo">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input name="nombre" id="nombre" type="text" class="form-control"
                                                        value="<?php echo $rows['nombre'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input name="tel1" id="tel1" type="number" class="form-control"
                                                            value="<?php echo $rows['tel1'];?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono 2</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas">+56</i></span>
                                                        </div>
                                                        <input name="tel2" id="tel2" type="number" class="form-control"
                                                            value="<?php echo $rows['tel2'];?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input name="email" id="mail" type="email" class="form-control"
                                                            value="<?php echo $rows['email'];?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Seleccionar Oficina</label>
                                                    <select id="ofi" class="form-control" name="ofi">

                                                        <?php foreach($rowsOficinas as $rowOficina): ?>
                                                        <option value="<?= $rowOficina['id'] ?>"
                                                            <?php if($rowOficina['desc_office']==$rows['desc_office']){echo " selected ";} ?>>
                                                            <?= $rowOficina['desc_office'] ?>
                                                        </option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>
                                                <button name="btn1" id="btn1" type="button"
                                                    class="btn btn-warning">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h2 class="card-title">Cambiar contraseña</h2>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Contraseña Actual</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Ingrese contraseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nueva contraseña</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Ingrese contraseña...">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirmar Contraseña</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirme contraseña...">
                                                </div>
                                                <?php } ?>
                                                <button name="btn2" id="btn2" type="button"
                                                    class="btn btn-warning">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>
</body>