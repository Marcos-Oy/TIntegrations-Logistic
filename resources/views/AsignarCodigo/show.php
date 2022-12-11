<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar con código</title>
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
            <div class="h1 text-center text-primary">Asignacion de Codigos</div>
            <?php  $orden = [];
            if (isset($_POST["orden"]) && !empty($_POST["orden"]) && $_POST["orden"]>0 &&($_POST["orden"])!="") 
            {
                $orden = $_POST["orden"];
            
                $orden = array_filter($orden);
            }
            ?>
            <form method="POST" <?php if(isset($_POST['entrega'])) { ?> action="?control=AsignarConCodigo&action=Asignar_Codigo" <?php } ?> >
                <!--Comienza el ciclo que dibuja los campos dinámicos-->
                <?php foreach ($orden as $nombre) { ?>
                <div class="container text-center ">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group mb-1">
                                <div class="form-floating mb-2">
                                    <input required class="form-control" value="<?php echo $nombre ?>" type="text"
                                        name="orden[]">
                                    <label for="orden[]">Orden</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="container text-center ">
                    <div class="col-3">
                        <div class="input-group mb-1">
                            <div class="form-floating mb-2">
                                <input autocomplete="off" ifclass="form-control" autofocus type="text" name="orden[]">
                                <label for="orden[]">Orden</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select id="cargo" class="form-control" name="repartidor" required>
                                <option selected>Seleccione repartidor</option>
                                <?php foreach($rows as $row): ?>
                                <option required value="<?= $row['username'] ?>">
                                    <?php echo $row['nombre']." ".$row['paterno']." ".$row['materno'] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" value="2">
                                <label class="form-check-label" for="accion1">
                                    En tránsito
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" value="3">
                                    <label class="form-check-label" for="accion1">
                                    En reparto
                                </label>
                            </div>
                        </div>
                    </div>
                    <button name="agregar" type="" hidden >Agregar campo</button>
                    <br>
                    <div class="col">
                        <div class="input-group mb-2">
                        <button type="submit" name="entrega" class="btn btn-success">ASIGNAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>
</body