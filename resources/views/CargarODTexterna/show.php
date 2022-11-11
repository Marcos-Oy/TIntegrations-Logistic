<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODT</title>
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
        <div class="content-wrapper">
            <!-- Contenido -->
            <div class="card card-blue">
                <h5 class="card-header text-center">Cargar Ordenes</h5>
                <div class="card-body">
                    <form class="form-inline">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="empresa" place>
                                    <option selected>Seleccione empresa origen</option>
                                    <option value="">Varmontt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="" id="archivo">
                                        <label for="archivo" class="custom-file-label">Seleccione Archivo CSV..</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Cargar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>

</body>