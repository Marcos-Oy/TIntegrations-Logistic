<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'includes/plugins.php';
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include 'includes/header.php';
        ?>
        <div class="content-wrapper">
            <div class="h1">Nueva orden</div>
            <form>
                <div class="row">
                    <div class="col-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Destino</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Región</label>
                                            <select id="regiones" class="form-control select2bs4" name="regiones"
                                                required>
                                                <option value="">Seleccione Región</option>
                                                <?php
                                                $mysqli = getConn();
                                                $listaregion = "CALL listarRegiones";
                                                $listareg = $mysqli->query($listaregion);
                                                while ($listare = mysqli_fetch_array($listareg)) {
                                                    echo "<option value='" . $listare[0] . "'>" . $listare[1] . "</option>";
                                                }
                                                $mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Comuna</label>
                                            <select id="comunas" class="form-control select2bs4" name="comunas"
                                                required></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Tipo de documento</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php
                                            $listartd = "call listarTipodedocumentos";
                                            $mysqli = getConn();
                                            $listatd = $mysqli->query($listartd);
                                            while ($lista = mysqli_fetch_array($listatd)) {
                                                echo "<div class='custom-control custom-radio'>
                                                      <input class='custom-control-input' type='radio' id='tipoPago" . $lista[0] . "' value ='" . $lista[0] . "' name='tipoPago'>
                                                      <label for='tipoPago" . $lista[0] . "' class='custom-control-label'>" . $lista[1] . "</label>
                                                      </div>";
                                            }
                                            $mysqli->close();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="col-3">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Documento</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php
                                            $listartp = "call listarTipopago";
                                            $mysqli = getConn();
                                            $listatp = $mysqli->query($listartp);
                                            while ($lista = mysqli_fetch_array($listatp)) {
                                                echo "<div class='custom-control custom-radio'>
                                                      <input class='custom-control-input' type='radio' id='documento" . $lista[0] . "' value ='" . $lista[0] . "' name='documento'>
                                                      <label for='documento" . $lista[0] . "' class='custom-control-label'>" . $lista[1] . "</label>
                                                      </div>";
                                            }
                                            $mysqli->close();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </form>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php
    include 'includes/footer.php';
    ?>
    <script src="js/validarRUT.js"></script>
    <script type="text/javascript" src="js/order_new.js"></script>
</body>