<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominaciones</title>
    <?php
    include('resources/views/layouts/dependencies.php');
    include('resources/views/nominar/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include 'resources/views/layouts/navbar.php';
        include 'resources/views/layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <form method="POST" action="?control=Nominar&action=Filtrar_Nominar">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h2>
                                            Nominar órdenes
                                            <a href="#" class="justify-content-md-end">
                                                <button type="submit" class="btn btn-secondary">
                                                    Filtrar
                                                </button>
                                            </a>
                                            <!-- <a href="#" class="justify-content-md-end">
                                                <button type="button" class="btn btn-success">
                                                    Excel
                                                </button>
                                            </a> -->
                                        </h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="card card-dark">
                                                        <div class="card-header">
                                                            <label>Seleccionar Oficina</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <select id="idoficina" name="idoficina" class="form-control">
                                                                <option value="" selected>-- Seleccione una oficina --</option>
                                                                <?php foreach ($rowsOficinas as $rowOficina) : ?>
                                                                    <option <?php if (isset($_POST['idoficina']) && !empty($_POST['idoficina']) && $rowOficina['id'] == $_POST['idoficina']) {
                                                                                echo "selected";
                                                                            } ?> value="<?= $rowOficina['id'] ?>">
                                                                        <?= $rowOficina['desc_office'] ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="card card-dark">
                                                        <div class="card-header">
                                                            <label>Seleccionar Estado de la Orden</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <select id="estorden" name="estorden" class="form-control">
                                                                <option value="">-- Seleccione un estado de orden
                                                                    --
                                                                </option>

                                                                <option <?php if (isset($_POST['estorden']) && !empty($_POST['estorden']) && 1 == $_POST['estorden']) {
                                                                            echo "selected";
                                                                        } ?> value="1">Pendiente</option>

                                                                <option <?php if (isset($_POST['estorden']) && !empty($_POST['estorden']) && 2 == $_POST['estorden']) {
                                                                            echo "selected";
                                                                        } ?> value="2">Finalizado</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="card card-dark">
                                                        <div class="card-header">
                                                            <label>Seleccionar Región</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <select id="regiones" name="regiones" class="form-control">
                                                                <option value="">-- Seleccione una región --</option>
                                                                <?php foreach ($rowsRegiones as $rowRegion) : ?>
                                                                    <option <?php if (isset($_POST['regiones']) && !empty($_POST['regiones']) && $rowRegion['idregion'] == $_POST['regiones']) {
                                                                                echo "selected";
                                                                            } ?> value="<?= $rowRegion['idregion'] ?>">
                                                                        <?= $rowRegion['nombre'] ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="card card-dark">
                                                        <div class="card-header">
                                                            <label>Seleccionar Comuna</label>
                                                        </div>
                                                        <div class="card-body">
                                                            <select id="comunas" name="comunas" class="form-control">
                                                                <option value="" selected>-- Seleccione una comuna --</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h2 class="card-title">Fecha creación de orden</h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Desde</label>
                                                    <input <?php if (isset($_POST['fechacreaciondesde']) && !empty($_POST['fechacreaciondesde'])) {
                                                                echo "value ='" . $_POST['fechacreaciondesde'] . "'";
                                                            } ?> id="fechacreaciondesde" name="fechacreaciondesde" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hasta</label>
                                                    <input <?php if (isset($_POST['fechacreacionhasta']) && !empty($_POST['fechacreacionhasta'])) {
                                                                echo "value ='" . $_POST['fechacreacionhasta'] . "'";
                                                            } ?> id="fechacreacionhasta" name="fechacreacionhasta" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h2 class="card-title">Fecha creación de actividad</h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Desde</label>
                                                    <input <?php if (isset($_POST['fechaactividaddesde']) && !empty($_POST['fechaactividaddesde'])) {
                                                                echo "value ='" . $_POST['fechaactividaddesde'] . "'";
                                                            } ?> id="fechaactividaddesde" name="fechaactividaddesde" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hasta</label>
                                                    <input <?php if (isset($_POST['fechaactividadhasta']) && !empty($_POST['fechaactividadhasta'])) {
                                                                echo "value ='" . $_POST['fechaactividadhasta'] . "'";
                                                            } ?> id="fechaactividadhasta" name="fechaactividadhasta" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h2 class="card-title">Repartidor</h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Seleccionar</label>
                                                    <select id="repartidor" name="repartidor" class="form-control">
                                                        <option value="">-- Seleccione un repartior --</option>
                                                        <?php foreach ($rowsUsers as $rowUser) : ?>
                                                            <?php if ($rowUser['desc_cargo'] == 'Repartidor') { ?>
                                                                <option <?php if (isset($_POST['repartidor']) && !empty($_POST['repartidor']) && $rowUser['username'] == $_POST['repartidor']) {
                                                                            echo "selected";
                                                                        } ?> value="<?= $rowUser['username'] ?>">
                                                                <?= $rowUser['nombre'] . " " . $rowUser['paterno'] . " " . $rowUser['materno'];
                                                            } ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>

            <?php if ($rows) : ?>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">Listado de nóminas</h2>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="NominarTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ODT</th>
                                                    <th>FECHA</th>
                                                    <th>OFICINA</th>
                                                    <th>REGIÓN</th>
                                                    <th>COMUNA</th>
                                                    <th>ESTADO ORDEN</th>
                                                    <th>ACTIVIDAD</th>
                                                    <th>USUARIO CREADOR</th>
                                                    <th>UBICACIÓN</th>
                                                    <th>REPARTIDOR</th>
                                                    <th>VALOR FLETE</th>
                                                    <th>TIPO PAGO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($rows as $row) : ?>
                                                    <tr>
                                                        <td><?= $row['numero'] ?></td>
                                                        <td><?= $row['fecha'] ?></td>
                                                        <td><?= $row['oficina'] ?></td>
                                                        <td><?= $row['region'] ?></td>
                                                        <td><?= $row['comuna'] ?></td>
                                                        <td><?= $row['estado_orden'] ?></td>
                                                        <td><?= $row['actividad'] ?></td>
                                                        <td><?= $row['creador'] ?></td>
                                                        <td><?= $row['bodega'] ?></td>
                                                        <td><?= $row['repartidor'] ?></td>
                                                        <td><?= $row['valor_flete'] ?></td>
                                                        <td><?= $row['tipopago'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ODT</th>
                                                    <th>FECHA</th>
                                                    <th>OFICINA</th>
                                                    <th>REGIÓN</th>
                                                    <th>COMUNA</th>
                                                    <th>ESTADO ORDEN</th>
                                                    <th>ACTIVIDAD</th>
                                                    <th>USUARIO CREADOR</th>
                                                    <th>UBICACIÓN</th>
                                                    <th>REPARTIDOR</th>
                                                    <th>VALOR FLETE</th>
                                                    <th>TIPO PAGO</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->

            <?php endif; ?>
        </div>
    </div>
    <?php
    include 'resources/views/layouts/footer.php';
    ?>
    <script type="text/javascript" src="resources/assets/js/order_new.js"></script>
</body>