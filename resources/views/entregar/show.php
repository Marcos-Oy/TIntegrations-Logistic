<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregar</title>
    <?php
        include ('resources/views/layouts/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include 'resources/views/layouts/navbar.php';
            include 'resources/views/layouts/aside.php';
        ?>

        <div class="content-wrapper center">
            <br>
            <div class="container-fluid center">
                <div class="row center">
                    <div class="col-md-6 center">
                        <div class="card card-info center">
                            <div class="card-header center">
                                <h3 class="card-title center">Entregar orden</h3>
                            </div>
                            <form>
                                <div class="card-body center">
                                    <div class="form-group center">
                                        <label for="exampleSelectBorderWidth2">Seleccionr ODT</label>
                                        <select class="custom-select form-control-border border-width-2"
                                            id="exampleSelectBorderWidth2">
                                            <option selected>Seleccionar Opcion </option>
                                            <?php foreach($rows as $row): ?>
                                            <option value="<?= $row['username'] ?>">
                                                <?php echo $row['nombre']." ".$row['paterno']." ".$row['materno'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imagen de entrega</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Subir
                                                    imagen</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Rut receptor</label>
                                        <input type="text" class="form-control" placeholder="12.345.678-9">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre receptor</label>
                                        <input type="text" class="form-control" placeholder="Nombre y apellido ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="Observaciones ..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>

</body>