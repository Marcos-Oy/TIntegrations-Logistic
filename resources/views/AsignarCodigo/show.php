<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar con código</title>
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
            <div class="h1 text-center text-primary">Asignacion de Codigos</div>

            <div class="alert alert-alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <a href="asignarCodigo.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                Volver
            </a>

            <form method="POST" action="asignarCodigo.php">
                <!--Comienza el ciclo que dibuja los campos dinámicos-->
                <div class="container text-center ">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group mb-1">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="number" name="orden[]">
                                    <label for="orden[]">Orden</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container text-center ">
                    <div class="col-3">
                        <div class="input-group mb-1">
                            <div class="form-floating mb-2">
                                <input autocomplete="off" class="form-control" autofocus type="number" name="orden[]">
                                <label for="orden[]">Orden</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <select id="cargo" class="form-control" name="repartidor" required>
                                <option selected>Seleccione repartidor</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="cargo" class="form-control" name="vehiculo" required>
                                <option selected>Seleccione vehiculo</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="En tránsito" name="accion"
                                    id="accion1">
                                <label class="form-check-label" for="accion1">
                                    En tránsito
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="En reparto" name="accion"
                                    id="accion2">
                                <label class="form-check-label" for="accion2">
                                    En reparto
                                </label>
                            </div>
                        </div>

                    </div>
                    <button name="agregar" hidden type="submit">Agregar campo</button>
                    <div class="col">
                        <div class="input-group mb-2">
                            <button type="button" class="btn btn-success">ASIGNAR</button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
    <?php
        include '../layouts/footer.php';
    ?>

</body>