<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisar Orden</title>
    <?php
    setlocale(LC_ALL, 'es_CL.UTF-8');
    include('resources/views/layouts/dependencies.php');
    include('resources/views/revisarOrden/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include 'resources/views/layouts/navbar.php';
        include 'resources/views/layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <!-- contenido -->
            <div class="container-fluid">
                <div class="card card-info">
                    <h5 class="card-header text-center">Buscar Orden</h5>
                    <div class="card-body text-center">
                        <form method="POST" action="?control=RevisarOrden&action=revisarByID" class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="orden" class="sr-only">Nº de Orden</label>
                                <input type="text" <?php
                                                    if (isset($_POST['orden']) && !empty($_POST['orden'])) {
                                                        echo " value='" . $_POST['orden'] . "' ";
                                                    }
                                                    ?> class="form-control" id="orden" name="orden" placeholder="Nº de Orden">
                            </div>
                            <button type="submit" class="btn btn-info mb-2">Buscar Orden</button>
                        </form>
                    </div>
                </div>
                <div class="card card-info">
                    <h5 class="card-header text-center">
                        Información de la orden
                    </h5>

                    <?php
                    if (isset($rowOrden) && !empty($rowOrden) && isset($detalles) && !empty($detalles)) {
                    ?>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($rowOrden as $rowOdt) : ?>
                                    <div class="col-md-4">
                                        <div class="card card-dark">
                                            <div class="card-header text-center">Origen</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        Oficina:
                                                    </div>
                                                    <div class="col-6">
                                                        <?= $rowOdt['oficina'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        Remitente:
                                                    </div>
                                                    <div class="col-6">
                                                        <?= $rowOdt['remitente'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        Tipo de documento:
                                                    </div>
                                                    <div class="col-6">
                                                        <?= $rowOdt['tipodocumento'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        N° de documento:
                                                    </div>
                                                    <div class="col-6">
                                                        <?= $rowOdt['identificador'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        Valor:
                                                    </div>
                                                    <div class="col-6">
                                                        $<?= number_format($rowOdt['valor_declarado'], 0, ',', '.') ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        Teléfono:
                                                    </div>
                                                    <div class="col-6">
                                                        <?= $rowOdt['fono_dest'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-dark">
                                            <div class="card-header text-center">Destino</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        Región:
                                                    </div>
                                                    <div class="col-8">
                                                        <?= $rowOdt['region'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        Provincia:
                                                    </div>
                                                    <div class="col-8">
                                                        <?= $rowOdt['provincia'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        Comuna:
                                                    </div>
                                                    <div class="col-8">
                                                        <?= $rowOdt['comuna'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        Dirección:
                                                    </div>
                                                    <div class="col-8">
                                                        <?= $rowOdt['direccion'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        Destinatario:
                                                    </div>
                                                    <div class="col-8">
                                                        <?= $rowOdt['destinatario'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        Teléfono:
                                                    </div>
                                                    <div class="col-8">
                                                        <?= $rowOdt['fono_dest'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-dark">
                                            <div class="card-header text-center">Carga</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-5">
                                                        Bultos:
                                                    </div>
                                                    <div class="col-7">
                                                        <?= $rowOdt['bultos'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        Sobres:
                                                    </div>
                                                    <div class="col-7">
                                                        <?= $rowOdt['sobres'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        Peso:
                                                    </div>
                                                    <div class="col-7">
                                                        <?= $rowOdt['peso'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        Dimenciones:
                                                    </div>
                                                    <div class="col-7">
                                                        <?= $rowOdt['dimensiones'] ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        Valor Flete:
                                                    </div>
                                                    <div class="col-7">
                                                        $<?= number_format($rowOdt['valor_flete'], 0, ',', '.') ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        Observaciones:
                                                    </div>
                                                    <div class="col-7">
                                                        <?= $rowOdt['observaciones'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="card card-info">
                            <h5 class="card-header text-center">Trazabilidad Orden</h5>
                            <div class="card-body">
                                <table id="NominarTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Usuario</th>
                                            <th>Acción</th>
                                            <th>Conductor</th>
                                            <th>Bodega</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($detalles as $rowDetail) : ?>
                                        <tr>
                                            <td><?= date($rowDetail['fecha']) ?></td>
                                            <td><?= $rowDetail['Usuario'] ?></td>
                                            <td><?= $rowDetail['nombre'] ?></td>
                                            <td><?= $rowDetail['Conductor'] ?></td>
                                            <td><?= $rowDetail['bodega'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="card-body">
                            Sin datos para mostrar
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
        include 'resources/views/layouts/footer.php';
        ?>
</body>