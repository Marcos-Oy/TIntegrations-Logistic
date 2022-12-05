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
    <script type="text/javascript">
        function filterFloat(evt, input) {
            // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
            var key = window.Event ? evt.which : evt.keyCode;
            var chark = String.fromCharCode(key);
            var tempValue = input.value + chark;
            var isNumber = (key >= 48 && key <= 57);
            var isSpecial = (key == 8 || key == 13 || key == 0 || key == 46);
            if (isNumber || isSpecial) {
                return filter(tempValue);
            }

            return false;

        }

        function filter(__val__) {
            var preg = /^([0-9]+\.?[0-9]{0,2})$/;
            return (preg.test(__val__) === true);
        }

        function validar() {
            var todo_correcto = true;
            if (document.getElementById('cantidad').value > 0) {
                if (document.getElementById('alto').value == '' ||
                    document.getElementById('alto').value == 0 ||
                    document.getElementById('largo').value == '' ||
                    document.getElementById('largo').value == 0 ||
                    document.getElementById('ancho').value == '' ||
                    document.getElementById('ancho').value == 0 ||
                    document.getElementById('peso').value == '' ||
                    document.getElementById('peso').value == 0) {
                    todo_correcto = false;
                    alert('Debe indicar los datos de los paquetes.');
                }
            } else {
                if (document.getElementById('qsobres').value == '' || document.getElementById('qsobres').value < 1) {
                    todo_correcto = false;
                    alert('Debe indicar por lo menos 1 sobre o paquete para crear la orden');
                }
            }

            return todo_correcto;
        }

        function validar2() {
            var todocorrecto = true;

            if (document.getElementById('tipodoc4').checked) {
                if (document.getElementById('valordec').value > 50000) {
                    todocorrecto = false;
                    alert('Valor declarado sin documento, no puede ser mayor a $50.000.');
                } else {
                    todocorrecto = true;
                }
            }
            if (document.getElementById('tipodoc3').checked || document.getElementById('tipodoc2').checked || document
                .getElementById('tipodoc1').checked) {
                if (document.getElementById('docnum').value < 1) {
                    todocorrecto = false;
                    alert('El número del documento es requerido.');
                } else {
                    todocorrecto = true;
                }
            }

            if (todocorrecto == true) {
                document.getElementById('enviar').style.visibility = 'hidden';
            }
            return todocorrecto;
        }
    </script>
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
                        <form method="POST" onsubmit='return validar()' action="?control=NuevaOrden&action=calcularFlete">
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
                                                <select id="comunas" class="form-control select2bs4" name="comunas">
                                                    <?php
                                                    if (isset($listaComunas)) :
                                                        foreach ($listaComunas as $comuna) : ?>
                                                            <option <?php if (isset($idcomuna) && $comuna['idcomuna'] == $idcomuna) {
                                                                        echo 'selected';
                                                                    } ?> value="<?php echo $comuna['idcomuna']; ?>"><?php echo $comuna['nombrecomuna']; ?></option>
                                                    <?php endforeach;
                                                    else :
                                                        echo "<option></option>";
                                                    endif;
                                                    ?>

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
                                            <input type="text" onkeypress="return filterFloat(event,this)" <?php if (isset($alto)) {
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
                                        <input type="submit" class="btn bg-olive form-control" value="Calcular" name="calcular">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($_POST['calcular']) || isset($_POST['enviar'])) { ?>
                            <form method="POST" onsubmit='return validar2()' action="?control=NuevaOrden&action=datosODT">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Dirección de destino</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="dirdtno">Calle</label>
                                                            <input <?php if (isset($dirdtno) && !empty($dirdtno)) {
                                                                        echo "value='" . $dirdtno . "'";
                                                                    } ?> required class="form-control" type="text" id="dirdtno" name="dirdtno">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nmrodtno">Número</label>
                                                            <input <?php if (isset($nmrodtno) && !empty($nmrodtno)) {
                                                                        echo "value='" . $nmrodtno . "'";
                                                                    } ?> required class="form-control" type="text" id="nmrodtno" name="nmrodtno">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="numeraldtno">N°Depto/Casa</label>
                                                            <input <?php if (isset($numeraldtno) && !empty($numeraldtno)) {
                                                                        echo "value='" . $numeraldtno . "'";
                                                                    } ?> class="form-control" type="text" id="numeraldtno" name="numeraldtno">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="refdtno">Referencia de la dirección</label>
                                                            <input <?php if (isset($refdtno) && !empty($refdtno)) {
                                                                        echo "value='" . $refdtno . "'";
                                                                    } ?> class="form-control" type="text" id="refdtno" name="refdtno">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Datos de clientes</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="rmttrut">Rut remitente</label>
                                                            <input <?php if (isset($rutrmtt)) {
                                                                        echo "value='" . $rutrmtt . "'";
                                                                    } ?> required oninput="checkRut(this)" class="form-control" type="text" id="rmttrut" name="rmttrut">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dtnorut">Rut Destinatario</label>
                                                            <input <?php if (isset($rutdtno)) {
                                                                        echo "value='" . $rutdtno . "'";
                                                                    } ?> required oninput="checkRut(this)" class="form-control" type="text" id="dtnorut" name="dtnorut">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Tipo de documento</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <?php
                                                                if (isset($tipodocumento) && !empty($tipodocumento)) :
                                                                    foreach ($tipodocumento as $row) :

                                                                ?>
                                                                        <input <?php if (isset($tipod) && !empty($tipod)) {
                                                                                    if ($row['idtipo_documento'] == $tipod) {
                                                                                        echo " checked ";
                                                                                    }
                                                                                } ?> required class='form-check-input' type='radio' value="<?php echo $row['idtipo_documento']; ?>" name='tipodoc' id='tipodoc<?php echo $row['idtipo_documento']; ?>'>
                                                                        <label class='form-check-label' for='tipodoc<?php echo $row['idtipo_documento']; ?>'><?php echo $row['nombre']; ?></label></br>
                                                                <?php
                                                                    endforeach;

                                                                endif;
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label>N° documento</label>
                                                            <input <?php if (isset($docnum) && !empty($docnum)) {
                                                                        echo "value='" . $docnum . "'";
                                                                    } ?> type="text" class='form-control' name='docnum' id='docnum'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Forma de pago</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <?php
                                                                if (isset($tipopago) && !empty($tipopago)) :
                                                                    foreach ($tipopago as $row) :

                                                                ?>
                                                                        <input <?php if (isset($tipopag) && !empty($tipopag)) {
                                                                                    if ($row['idtipo_pago'] == $tipopag) {
                                                                                        echo " checked ";
                                                                                    }
                                                                                } ?> required class='form-check-input' type='radio' value="<?php echo $row['idtipo_pago']; ?>" name='tipopag' id='tipopag<?php echo $row['idtipo_pago']; ?>'>
                                                                        <label class='form-check-label' for='tipopag<?php echo $row['idtipo_pago']; ?>'><?php echo $row['nombre']; ?></label></br>
                                                                <?php
                                                                    endforeach;

                                                                endif;
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label>Valor declarado</label>
                                                            <input <?php if (isset($valordec) && !empty($valordec)) {
                                                                        echo "value='" . $valordec . "'";
                                                                    } ?> type="text" class='form-control' name='valordec' id='valordec'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" value="<?php echo $idcomuna; ?>" name="comunas">
                                        <input type="hidden" value="<?php echo $dimensiones; ?>" name="dimensiones">
                                        <input type="hidden" value="<?php echo $qsobres; ?>" name="qsobres">
                                        <input type="hidden" value="<?php echo $cantidad; ?>" name="cantidad">
                                        <input type="hidden" value="<?php echo $peso; ?>" name="peso">
                                        <input type="hidden" value="<?php echo $alto; ?>" name="alto">
                                        <input type="hidden" value="<?php echo $ancho; ?>" name="ancho">
                                        <input type="hidden" value="<?php echo $largo; ?>" name="largo">
                                        <input type="hidden" value="<?php echo $valorf; ?>" name="valorf">
                                        <input type="submit" class="btn bg-olive form-control" value="Enviar" name="enviar">
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                    <?php
                    if (isset($_POST['enviar'])) { ?>
                        <div class="col-md-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>$ <input type="number" value="<?php echo $valorf; ?>" name="valorflete"></h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="inner">
                                    <h4>Datos de carga</h4>
                                    <ul>
                                        <li>Bultos: <?php echo $cantidad; ?></li>
                                        <li>Sobres: <?php echo $qsobres; ?></li>
                                        <li>Peso: <?php echo $peso; ?></li>
                                        <li>Dimenciones: <?php echo $dimensiones; ?> M<sup>3</sup></li>
                                    </ul>
                                </div>
                                <div class="inner">
                                    <h4>Datos de destino</h4>
                                    <ul>
                                        <li>Región: <?php echo $descregion; ?></li>
                                        <li>Comuna: <?php echo $desccomuna; ?></li>
                                        <li>Dirección: <?php echo $dirdtno . " " . $nmrodtno . " - " . $numeraldtno; ?></li>
                                        <li>Referencias: <?php echo $refdtno; ?></li>
                                    </ul>
                                </div>
                                <div class="inner">
                                    <h4>Destinatario</h4>
                                    <ul>
                                        <li>Nombre: </li>
                                        <li>Teléfono 1: </li>
                                        <li>Teléfono 2: </li>
                                    </ul>
                                </div>
                                <div class="inner">
                                    <h4>Remitente</h4>
                                    <ul>
                                        <li>Nombre: </li>
                                        <li>Teléfono 1: </li>
                                        <li>Teléfono 2: </li>
                                    </ul>
                                </div>
                                <div class="inner">
                                    <h4>Información adicional</h4>
                                    <ul>
                                        <li>Oficina: <?php echo $_SESSION['bodega']; ?></li>
                                        <li>Documento: <?php echo $descdocumento. " ". $docnum ?></li>
                                        <li>Valor declarado: $<?php echo number_format($_POST['valordec'],0,',','.') ?></li>
                                        <li>Forma de pago: <?php echo $desctipopago ?></li>
                                    </ul>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Crear orden <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php
                    } elseif (isset($_POST['calcular'])) {
                    ?>
                        <div class="col-md-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>$ <?php echo number_format($valorf, 0, ",", "."); ?></h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="inner">
                                    <h4>Datos de destino</h4>
                                    <ul>
                                        <li>Región: <?php echo $descregion; ?></li>
                                        <li>Comuna: <?php echo $desccomuna; ?></li>
                                    </ul>
                                </div>
                                <div class="inner">
                                    <h4>Datos de carga</h4>
                                    <ul>
                                        <li>Bultos: <?php echo $cantidad; ?></li>
                                        <li>Sobres: <?php echo $qsobres; ?></li>
                                        <li>Peso: <?php echo $peso; ?> Kg.</li>
                                        <li>Dimenciones: <?php echo $dimensiones; ?> M<sup>3</sup></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
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