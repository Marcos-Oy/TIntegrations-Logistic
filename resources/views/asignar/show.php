<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar</title>
    <?php
        include ('resources/views/layouts/dependencies.php');
        include ('resources/views/asignar/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include 'resources/views/layouts/navbar.php';
            include 'resources/views/layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <form class="form" method="POST" action="?control=Asignar&action=Asignar">
            <!-- Asignar -->
                <div class="card card-blue">
                    <h5 class="card-header text-center">Asignar Orden</h5>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <select class="form-control" id="repartidor" name="repartidor" place>
                                        <option value="">Seleccione repartidor</option>
                                        <?php foreach($rows as $row): ?>
                                        <option value="<?= $row['username'] ?>">
                                        <?php echo $row['nombre']." ".$row['paterno']." ".$row['materno'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estado" value="2" checked="">
                                        <label class="form-check-label">En transito</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estado" value="3">
                                        <label class="form-check-label">En reparto</label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <button type="submit" class="btn btn-success mb-2" name="asignar" id="asignar">Asignar</button>
                                </div>
                                <div class="form-group col-lg-3">
                                    <button type="submit" class="btn btn-warning mb-2" name="devolver" id="devolver">Enviar a oficina para devolucion</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-green">
                    <h5 class="card-header text-center">Ordenes</h5>
                    <div class="card-body">
                        <table id="ordenTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ODT</th>
                                    <th>Oficina</th>
                                    <th>Fecha</th>
                                    <th>Region</th>
                                    <th>Comuna</th>
                                    <th>Bultos</th>
                                    <th>Dimensiones</th>
                                    <th>Peso</th>
                                    <th>Cant. Sobres</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($resultado): ?>
                                <?php foreach($resultado as $row): ?>
                                <tr>
                                    <td>
                                        <div class="form-check center">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ordenes[]"
                                            value="<?= $row['idorden'] ?>">
                                        </div>
                                    </td>
                                    <td><?= $row['ODT'] ?></td>
                                    <td><?= $row['Oficina'] ?></td>
                                    <td><?= $row['Fecha'] ?></td>
                                    <td><?= $row['Region'] ?></td>
                                    <td><?= $row['Comuna'] ?></td>
                                    <td><?= $row['Bultos'] ?></td>
                                    <td><?= $row['Dimensiones'] ?></td>
                                    <td><?= $row['Peso'] ?></td>
                                    <td><?= $row['Sobres'] ?></td>
                                    <td><?= $row['Valor'] ?></td>
                                    <td><a class="btn btn-primary" id="btnImprimir" href="#" value="<?= $row['idorden'] ?>">
                                            <i class="fas fa-print" aria-hidden="true"></i></a>
                                        <a class="btn btn-info" href="#" target="_blank" value="<?= $row['idorden'] ?>">
                                            <i class="fas fa-print" aria-hidden="true"></i></a>
                                        <a class="btn btn-warning" href="#" value="<?= $row['idorden'] ?>"><i class="fas fa-pen"
                                                aria-hidden="true"></i></a>
                                        <a class="btn btn-danger" id="anular" value="<?= $row['idorden'] ?>"
                                            href="#"><i class="fas fa-trash-alt"
                                                aria-hidden="true"></i></a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center">No hay registros actualmente</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>

</body>