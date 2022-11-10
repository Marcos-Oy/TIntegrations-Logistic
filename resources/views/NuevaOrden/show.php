<?php
require_once "../../../app/controllers/RegionesController.php";

$region = new RegionesController();
$rowsRegiones = $region->show();
if(isset($_POST['calcular'])){
    require_once "../../../app/controllers/ComunasController.php";
    require_once "../../../app/controllers/tarifaController.php";
    $comunas = new comunasController;
    $tarifas = new tarifaController;
    $reg = $_POST['regiones'];
    $com = $_POST['comunas'];
    $alto = $_POST['alto'];
    $largo = $_POST['largo'];
    $ancho = $_POST['ancho'];
    if (isset($_POST['cantidad']) && !empty($_POST['cantidad']) && $_POST['cantidad']>0) {
        $peso = str_replace(',', '.', $_POST['peso']);
        $pesosize = $alto*$ancho*$largo *2.5/10000;
        if($peso <= $pesosize){
            $pesofinal = $pesosize;
        }else{
            $pesofinal = $peso;
        }
    } else {
        $pesofinal = 0;
        $cantidad = 0;
        $alto = 0;
        $ancho = 0;
        $largo = 0;
        $peso = 0;
    }
    if(isset($_POST['cantidad'])&&!empty($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
    }else{
        $cantidad = 0;
    }
    if(isset($_POST['qsobres'])&&!empty($_POST['qsobres'])){
        $qsobres = $_POST['qsobres'];
    }else{
        $qsobres = 0;
    }
    $rowsRegion = $region->showOne($reg);
    foreach($rowsRegion as $rowRegion):
        $descRegion = $rowRegion[1];
    endforeach;
    $rowsCom = $comunas->showOne($com);
    foreach($rowsCom as $rowCom):
        $descComuna = $rowCom[1];
    endforeach;
    $rowsTarifa = $tarifas->show($pesofinal,$qsobres,$com);
    foreach($rowsTarifa as $rowTar):
        $tarifa=$rowTar[0];
    endforeach;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Orden</title>
    <?php
        include ('../layouts/dependencies.php');
    ?>
    <script type="text/javascript" src="../../assets/js/validarCamposBultos.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include '../layouts/navbar.php';
            include '../layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" onsubmit='return validarBultos()'>
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Información de destino</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Región</label>
                                            <select required id="regiones" class="form-control select2bs4"
                                                name="regiones">
                                                <option value="">Seleccione Región</option>
                                                <?php foreach($rowsRegiones as $rowsRegion): 
                                                    $value = $rowsRegion[0];
                                                    $descvalue = $rowsRegion[1];
                                                    ?>
                                                <option <?php if(isset($reg)){if($reg == $value){echo "selected";}} ?>
                                                    value="<?= $value ?>"><?= $descvalue ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Comuna</label>
                                            <select required id="comunas" class="form-control" name="comunas">
                                                <option value="<?php if(isset($com)){echo $com;} ?>">
                                                    <?php if(isset($com)){echo $descComuna;} else {echo "Seleccione Comuna";} ?>
                                                </option>
                                                <?php foreach($rowsComunas as $rwoscomunas): ?>
                                                <option value="<?= $rwoscomunas[0] ?>"><?= $rwoscomunas[1] ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
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
                                            <input <?php if(isset($alto)){echo "value='".$alto."'";} ?> type="number"
                                                class="form-control" placeholder="Alto cms." name="alto" id="alto"
                                                min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ancho</label>
                                            <input <?php if(isset($ancho)){echo "value='".$ancho."'";} ?> type="number"
                                                class="form-control" placeholder="Ancho cms." name="ancho" id="ancho"
                                                min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Largo</label>
                                            <input <?php if(isset($largo)){echo "value='".$largo."'";} ?> type="number"
                                                class="form-control" placeholder="Largo cms." name="largo" id="largo"
                                                min="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Peso</label>
                                            <input onkeypress="return filterFloat(event,this)"
                                                <?php if(isset($peso)){echo "value='".$peso."'";} ?> type="text"
                                                class="form-control" placeholder="Peso Kgs." name="peso" id="peso"
                                                min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Cantidad de bultos</label>
                                            <input <?php if(isset($cantidad)){echo "value='".$cantidad."'";} ?>
                                                type="number" class="form-control" placeholder="0" name="cantidad"
                                                id="cantidad" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Cantidad de sobres</label>
                                            <input <?php if(isset($qsobres)){echo "value='".$qsobres."'";} ?>
                                                type="number" class="form-control" placeholder="0" name="qsobres"
                                                id="qsobres" min="0">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn bg-lightblue form-control" value="Calcular"
                                            name="calcular">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php 
                        if(isset($_POST['calcular']))
                        {
                            require_once "../../../app/controllers/tipoPagoController.php";
                            $tipoPagos = new tipoPagoController();
                            $rowsTipoPago = $tipoPagos->show();                            
                        ?>

                        <form method="POST">
                            <input type="hidden" name="region" value="<?php echo $reg;?>">
                            <input type="hidden" name="comuna" value="<?php echo $com;?>">
                            <input type="hidden" name="alto" value="<?php echo $alto;?>">
                            <input type="hidden" name="largo" value="<?php echo $largo;?>">
                            <input type="hidden" name="ancho" value="<?php echo $ancho;?>">
                            <input type="hidden" name="peso" value="<?php echo $peso;?>">
                            <input type="hidden" name="cantidad" value="<?php echo $cantidad;?>">
                            <input type="hidden" name="qsobres" value="<?php echo $qsobres;?>">
                            <div class="row">
                                <div class="col-lg-6 col6">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            Tipo de pago
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <?php foreach($rowsTipoPago as $rowTipoPago): ?>
                                                <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="tipopago<?= $rowTipoPago[0] ?>" name="tipopago">
                                                <label for="tipopago<?= $rowTipoPago[0] ?>"
                                                    class="custom-control-label"><?= $rowTipoPago[1] ?></label></div>
                                                <?php endforeach; ?>

                                            </div>
                                            <div class="form-group">
                                                <label>Valor declarado</label>
                                                <input type="text" class="form-control" placeholder="Valor declarado">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col6">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            Tipo de documento
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio1"
                                                        name="customRadio">
                                                    <label for="customRadio1"
                                                        class="custom-control-label">Boleta</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                                        name="customRadio">
                                                    <label for="customRadio2"
                                                        class="custom-control-label">Factura</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio3"
                                                        name="customRadio">
                                                    <label for="customRadio3" class="custom-control-label">Guía de
                                                        despacho</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio4"
                                                        name="customRadio">
                                                    <label for="customRadio4" class="custom-control-label">Sin
                                                        documento</label>
                                                </div>

                                                <label>Número de documento</label>
                                                <input type="text" class="form-control" placeholder="N° de documento">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Datos remitente</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>RUT</label>
                                            <input type="text" class="form-control" placeholder="12345678-9"
                                                name="rmttrut" id="rmttrut" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control"
                                                placeholder="Nombre y apellido de remitente" name="rmttnombre"
                                                id="rmttnombre">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Apellido</label>
                                            <input type="text" class="form-control" placeholder="Apellidos"
                                                name="rmttapell" id="rmttapell">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Datos destinatario</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>RUT</label>
                                                <input type="text" class="form-control" placeholder="12345678-9"
                                                    name="dtnorut" id="dtnorut" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nombre y apellido de destinatario" name="dtnonombre"
                                                    id="dtnonombre">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Apellido</label>
                                                <input type="text" class="form-control" placeholder="Apellidos"
                                                    name="dtnoapell" id="dtnoapell">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn bg-lightblue form-control" value="Enviar"
                                            name="enviar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg.12 col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>$ <?php echo $tarifa; ?> Valor flete</h3>
                                        <p>Datos de la carga:</p>
                                        <ul>
                                            <li>Destino: <?php echo $descRegion; ?> <i
                                                    class="fas fa-arrow-circle-right"></i> <?php echo $descComuna; ?>
                                            </li>
                                            <li>Peso: <?php echo $peso; ?></li>
                                            <li>Dimensiones:
                                                <?php if(!empty($alto)&&!empty($ancho)&&!empty($largo)) {echo $alto * $ancho * $largo / 1000000;} else {echo 0;} ?>
                                                Mts<sup>3</sup></li>
                                            <li>Bultos: <?php echo $cantidad; ?></li>
                                            <li>Sobres: <?php echo $qsobres; ?></li>
                                        </ul>
                                        <p>Datos del remitente: </p>
                                        <ul>
                                            <li>Rut: </li>
                                            <li>Nombre: </li>
                                        </ul>
                                        <p>Datos del remitente: </p>
                                        <ul>
                                            <li>Rut: </li>
                                            <li>Nombre: </li>
                                            <li>Dirección: </li>
                                        </ul>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        Continuar <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
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
        include '../layouts/footer.php';
    ?>
    <script type="text/javascript" src="../../assets/js/validarRUT.js"></script>
    <script type="text/javascript" src="../../assets/js/order_new.js"></script>
    <script type="text/javascript" src="../../assets/js/float.js"></script>
</body>