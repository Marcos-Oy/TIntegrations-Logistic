<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Orden</title>
    <?php
    include('resources/views/layouts/dependencies.php');
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
                    <div class="col-md-6">
                        <form method="POST" action="?control=NuevaOrden&action=calcularFlete">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Información de destino</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Región</label>
                                                <select id="regiones" class="form-control select2bs4" name="regiones">
                                                    <option></option>
                                                    <?php
                                                    if ($listaRegiones) :
                                                        foreach ($listaRegiones as $region) : ?>
                                                            <option <?php if (isset($idregion) && $region['idregion'] == $idregion) {
                                                                        echo "selected";
                                                                    } ?> value='<?php echo $region['idregion']; ?>'><?php echo $region['nombre']; ?></option></br>
                                                    <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Comuna</label>
                                                <select id="comunas" class="form-control select2db4" name="comunas" >
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Datos de carga</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Alto</label>
                                            <input type="number" <?php if (isset($alto)) {
                                                                        echo "value=" . $alto;
                                                                    } ?> class="form-control" placeholder="Alto cms." name="alto" id="alto" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ancho</label>
                                            <input type="number" <?php if (isset($alto)) {
                                                                        echo "value=" . $ancho;
                                                                    } ?> class="form-control" placeholder="Ancho cms." name="ancho" id="ancho" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Largo</label>
                                            <input type="number" <?php if (isset($alto)) {
                                                                        echo "value=" . $largo;
                                                                    } ?> class="form-control" placeholder="Largo cms." name="largo" id="largo" min="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Peso</label>
                                            <input type="text" <?php if (isset($alto)) {
                                                                    echo "value=" . $peso;
                                                                } ?> class="form-control" placeholder="Peso Kgs." name="peso" id="peso" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Cantidad de bultos</label>
                                            <input type="number" <?php if (isset($alto)) {
                                                                        echo "value=" . $cantidad;
                                                                    } ?> class="form-control" placeholder="0" name="cantidad" id="cantidad" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Cantidad de sobres</label>
                                            <input type="number" <?php if (isset($alto)) {
                                                                        echo "value=" . $qsobres;
                                                                    } ?> class="form-control" placeholder="0" name="qsobres" id="qsobres" min="0">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn bg-lightblue form-control" value="Calcular" name="calcular">
                                    </div>
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
    <script type="text/javascript" src="resources/assets/js/validarRUT.js"></script>
    <script type="text/javascript" src="resources/assets/js/order_new.js"></script>
</body>