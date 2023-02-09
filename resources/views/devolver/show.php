<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolver</title>
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
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Devolver orden</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleSelectBorderWidth2">Seleccionr ODT</label>
                                        <select class="custom-select form-control-border border-width-2"
                                            id="exampleSelectBorderWidth2">
                                            <option>ODT 1</option>
                                            <option>ODT 2</option>
                                            <option>ODT 3</option>
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
        <?php
        include 'resources/views/layouts/footer.php';
    ?>

</body>