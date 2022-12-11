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
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="card card-info ">
                            <div class="card-header ">
                                <h3 class="card-title ">Entregar orden</h3>
                            </div>
                            <form enctype="multipart/form-data" action="?control=Entregar&action=Entrega" method="POST">
                                <div class="card-body ">
                                    <div class="form-group ">
                                        <label for="exampleSelectBorderWidth2">Seleccionr ODT</label>
                                        <select  required class="custom-select form-control-border border-width-2"
                                            id="exampleSelectBorderWidth2" name="ODT">
                                            <option selected>Seleccionar Opcion </option>
                                            <?php foreach($rows as $row): ?>
                                            <option value="<?= $row['idorden'] ?>">
                                                <?php echo $row['ODT']?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imagen de entrega</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input required type="file" class="custom-file-input" id="exampleInputFile" name="archivo"  id="archivo">
                                                <label class="custom-file-label"  for="exampleInputFile">Subir
                                                    imagen</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Rut receptor</label>
                                        <input  required type="text" oninput="checkRut(this)" class="form-control" name="rut"
                                            placeholder="12.345.678-9">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre receptor</label>
                                        <input required type="text" class="form-control" name="nombre" placeholder="Nombre y apellido ...">
                                    </div>
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <textarea  required class="form-control" rows="3" name="obse"
                                            placeholder="Observaciones ..."></textarea>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <button type="submit" name="entrega" class="btn btn-success">Entregar</button>
                                        </div>
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
    <script type="text/javascript" src="resources/assets/js/validarRUT.js"></script>
</body>