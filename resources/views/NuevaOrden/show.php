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
                        <form method="POST">
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
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Seleccionar fecha</label>
                                            <input type="date" class="form-control" placeholder="0" name="fecha"
                                                id="fecha">
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
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-6">
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
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php
        include '../layouts/footer.php';
    ?>

</body>