<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Orden</title>
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
                    <div class="col-md-6">
                        <form method="POST" action="?control=Ordenes&action=calcularFlete">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Información de destino</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Región</label>
                                            <select id="regiones" class="form-control select2bs4" name="regiones">
                                                <option value="">Seleccione Región</option>
                                                <?php
                                                if(isset($com))
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Comuna</label>
                                            <select id="comunas" class="form-control" name="comunas">
                                                <option value="">Seleccione Comuna</option>
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
                                            <input type="number" class="form-control" placeholder="Alto cms."
                                                name="alto" id="alto" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ancho</label>
                                            <input type="number" class="form-control" placeholder="Ancho cms."
                                                name="ancho" id="ancho" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Largo</label>
                                            <input type="number" class="form-control" placeholder="Largo cms."
                                                name="largo" id="largo" min="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Peso</label>
                                            <input type="text" class="form-control" placeholder="Peso Kgs." name="peso"
                                                id="peso" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Cantidad de bultos</label>
                                            <input type="number" class="form-control" placeholder="0" name="cantidad"
                                                id="cantidad" min="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Cantidad de sobres</label>
                                            <input type="number" class="form-control" placeholder="0" name="qsobres"
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
                        <form method="POST">
                            <div class="row">
                                <div class="col-lg-6 col6">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            Tipo de pago
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                                        name="customRadio">
                                                    <label for="customRadio2"
                                                        class="custom-control-label">Contado</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio3"
                                                        name="customRadio">
                                                    <label for="customRadio3"
                                                        class="custom-control-label">Transferencia</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio4"
                                                        name="customRadio">
                                                    <label for="customRadio4" class="custom-control-label">Por
                                                        pagar</label>
                                                </div>
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
                                        <h3>$ Valor flete</h3>
                                        <p>Datos de la carga:</p>
                                        <ul>
                                            <li>Destino:</li>
                                            <li>Peso: </li>
                                            <li>Dimensiones: Mts<sup>3</sup></li>
                                            <li>Bultos:</li>
                                            <li>Sobres:</li>
                                        </ul>
                                        <p>Datos del remitente:</p>
                                        <ul>
                                            <li>Rut:</li>
                                            <li>Nombre: </li>
                                        </ul>
                                        <p>Datos del remitente:</p>
                                        <ul>
                                            <li>Rut:</li>
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
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>
    <script type="text/javascript" src="assets/js/validarRUT.js"></script>
    <script type="text/javascript" src="assets/js/order_new.js"></script>
</body>