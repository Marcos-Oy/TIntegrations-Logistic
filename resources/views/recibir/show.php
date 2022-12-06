<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir</title>
    <?php
        include ('resources/views/layouts/dependencies.php');
        include ('resources/views/recibir/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include 'resources/views/layouts/navbar.php';
        include 'resources/views/layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <br>
            <div class="h1 text-center text-info">Recepcion de Ordenes</div>
            
            <form method="POST" action="?control=Recibir&action=Recibir">
                <div class="container">
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-info col" name="entrega" value="Recibir Entrega">
                            RECIBIR ENTREGA
                        </button>
                    </div>
                </div>
                <!-- Main content -->
                <div class="container  table-responsive">
                    <table id="UsersTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>&nbsp;&nbsp;</th>
                                <th>ODT</th>
                                <th>Fecha</tH>
                                <th>Región</th>
                                <th>Comuna</th>
                                <th>Bultos</th>
                                <th>Dimensiones</th>
                                <th>Peso</th>
                                <th>Cant. Sobres</th>
                                <th>Tipo de pago</th>
                                <th>Valor declarado</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($resultado): ?>
                            <?php foreach($resultado as $row): ?>
                            <tr>
                                <td>
                                    <div class="form-check center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ordenes[]"
                                        value="<?= $row['ODT'] ?>">
                                    </div>
                                </td>
                                <td><?= $row['ODT'] ?></td>
                                <td><?= $row['fecha'] ?></td>
                                <td><?= $row['regi'] ?></td>
                                <td><?= $row['comun'] ?></td>
                                <td><?= $row['bultos'] ?></td>
                                <td><?= $row['dimensiones'] ?></td>
                                <td><?= $row['peso'] ?></td>
                                <td><?= $row['sobres'] ?></td>
                                <td><?= $row['nombre'] ?></td>
                                <td><?= $row['valor_declarado'] ?></td>
                                <td><?= $row['valor_flete'] ?></td>

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

            </form>
            <!-- Main content -->

        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>
</body>