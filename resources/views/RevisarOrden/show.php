<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisar Orden</title>
    <?php
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
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="orden" class="sr-only">Nº de Orden</label>
                                <input type="number" class="form-control" id="orden" placeholder="Nº de Orden">
                            </div>
                            <button type="submit" class="btn btn-info mb-2">Buscar Orden</button>
                        </form>
                    </div>
                </div>
                <div class="card card-info">
                    <h5 class="card-header text-center">
                        Información de la orden
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-dark">
                                    <div class="card-header text-center">Destino</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                Región:
                                            </div>
                                            <div class="col-8">
                                                Valparaiso
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                Provincia:
                                            </div>
                                            <div class="col-8">
                                                Los Andes
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                Comuna:
                                            </div>
                                            <div class="col-8">
                                                Los Andes
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                Dirección:
                                            </div>
                                            <div class="col-8">
                                                Achik 484
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                Destinatario:
                                            </div>
                                            <div class="col-8">
                                                Natalia Fernandez
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                Teléfono:
                                            </div>
                                            <div class="col-8">
                                                967293148
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-info">
                        <h5 class="card-header text-center">Trazabilidad Orden</h5>
                        <div class="card-body">
                            <table id="ordenTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Usuario</th>
                                        <th>Acción</th>
                                        <th>Conductor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2022-08-18 14:58:52</td>
                                        <td>Nathalie Araya Saavedra</td>
                                        <td>Orden creada</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2022-08-14 20:58:52</td>
                                        <td>Carlos Gaete</td>
                                        <td>Orden creada</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2022-08-18 14:58:52</td>
                                        <td>Carlos Gaete</td>
                                        <td>Orden creada</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2022-08-14 20:58:52</td>
                                        <td>Carlos Gaete</td>
                                        <td>Orden creada</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2022-08-18 14:58:52</td>
                                        <td>Carlos Gaete</td>
                                        <td>Orden creada</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'resources/views/layouts/footer.php';
        ?>
</body>