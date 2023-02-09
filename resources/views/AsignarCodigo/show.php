<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar con código</title>
    <?php
    include('resources/views/layouts/dependencies.php');
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
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Asignacion de Codigos</h3>
                    </div>
                    <div class="card-body">
                        <?php $orden = [];
                        if (isset($_POST["orden"]) && !empty($_POST["orden"]) && $_POST["orden"] > 0 && ($_POST["orden"]) != "") {
                            $orden = $_POST["orden"];

                            $orden = array_filter($orden);
                        }
                        ?>

                        <form id="form1" name="form1" method="POST" action="">

                            <!--Comienza el ciclo que dibuja los campos dinámicos-->
                            <?php
                            $counter = 0;
                            foreach ($orden as $nombre) :
                                $counter = $counter + 1;
                            ?>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="input-group mb-1">
                                            <div class="form-floating mb-2">
                                                <label for="orden<?php echo $counter; ?>">Orden: </label>
                                                <input id="orden<?php echo $counter; ?>" required class="form-control" value="<?php echo $nombre ?>" type="text" name="orden[]">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                            <div class="container text-center ">
                                <div class="col-3">
                                    <div class="input-group mb-1">
                                        <div class="form-group mb-2">
                                            <label for="orden">Orden: </label>
                                            <input autocomplete="off" id="orden" class="form-control" autofocus type="text" name="orden[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <select id="cargo" class="form-control" name="repartidor" required>
                                            <option selected>Seleccione repartidor</option>
                                            <?php foreach ($rows as $row) : ?>
                                                <option required value="<?= $row['username'] ?>">
                                                    <?php echo $row['nombre'] . " " . $row['paterno'] . " " . $row['materno'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" id="estado1" value="2">
                                            <label class="form-check-label" for="estado1">
                                                En tránsito
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" id="estado2" value="3">
                                            <label class="form-check-label" for="estado2">
                                                En reparto
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="agregar" value="Agregar" hidden>
                                <br>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <input type="submit" form="form1" value="Asignar" name="entrega" class="btn btn-success" formaction="?control=AsignarConCodigo&action=Asignar_Codigo">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'resources/views/layouts/footer.php';
    ?>
</body