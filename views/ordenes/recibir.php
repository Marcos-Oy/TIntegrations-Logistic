<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir</title>
    <?php
    include '../includes/plugins.php';
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include '../includes/header.php';
        ?>
            <div class="content-wrapper">
                <br>
                <div class="h1 text-center text-primary">Recepcion de Ordenes</div>
                <form method="post">
                    <div class="container text-center " >
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Indique el Texto " aria-label="Username" aria-describedby="basic-addon1">                      
                                &nbsp&nbsp&nbsp
                            <button type="button" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                                <font _mstmutation="1">BUSCAR</font>
                            </button>
                                &nbsp&nbsp&nbsp
                            <button type="button" class="btn btn-warning">LIMPIAR</button>
                        </div>
                    </div>
                </form>
                <form method="post">
                    <div class="container text-center " >
                        <div class="input-group mb-2 ">
                            <input type="text" class="form-control" placeholder="Indique el Texto " aria-label="Username" aria-describedby="basic-addon1">                      
                                &nbsp&nbsp&nbsp
                            <button type="button" class="btn btn-success">RECIBIR ENTREGA</button>
                        </div>
                    </div>
                </form>
                <form method="POST" action="recibirorden.php">
                    <!-- <?php if ($_SESSION['cargoid']!=2) {?> -->
                    <div class="container" >
                        <div class="input-group mb-2">
                            <button type="button" class="btn btn-primary col" name="entrega" value="Recibir Entrega">RECIBIR ENTREGA</button>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <button type="button" class="btn btn-success col " name="devolucion" value="Recibir Devolución">RECIBIR DEVOLUCION</button>
                        </div>
                    </div>
                    <?php  }   ?>
                    <div class="container  table-responsive">
                        <table class="table table-success  text-center">
                            <thead>
                                <tr>
                                    <!-- <?php if ($_SESSION['cargoid']!=2) { ?> -->
                                    <th></th>
                                    <?php } ?>
                                    <th>ODT</th>
                                    <th>Fecha</tH>
                                    <th>Región</th>
                                    <th>Comuna</th>
                                    <th>Bultos</th>
                                    <th>Dimensiones</th>
                                    <th>Peso</th>
                                    <th>Cant. Sobres</th>
                                    <th>Tipo de pago</th>
                                    <!-- <?php if ($_SESSION['cargoid']!=2) { ?> -->
                                    <th>Valor declarado</th>
                                    <th>Total</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php while ($orden = mysqli_fetch_array($result)) 
                                {
                                    $idorden = $orden[0];
                                    $fecha = $orden[1];
                                    $region = $orden[2];
                                    $comuna = $orden[3];
                                    $cantidad = $orden[4];
                                    $qsobres = $orden[5];
                                    $metros = round($orden[6]/1000000, 2);
                                    $peso = number_format($orden[7], 2, '.', '.');
                                    $valor = $orden[8];
                                    $documento = $orden[9];
                                    $valordeclarado = $orden[10];
                                    $tipopago = $orden[11];
                                    $idact = $orden[12]; ?>
                                    <tr>
                                        <?php if ($_SESSION['cargoid']!=2) { ?>
                                        <td>
                                            <div class="form-check"> 
                                                <input class="form-check-input" onChange="marcar(this)" name="orden[]" type="checkbox"
                                                    value="<?php echo $idorden; ?>"
                                                    id="<?php echo $idorden; ?>">
                                                <input type="hidden"
                                                    value="<?php echo $valor; ?>"
                                                    id="valor<?php echo $idorden; ?>"
                                                    name="valor<?php echo $idorden; ?>">
                                                <input type='hidden' readonly class='form-control-plaintext text-center'
                                                    value='<?php echo $metros; ?>'
                                                    id='metros<?php echo $idorden; ?>'
                                                    name='metros<?php echo $idorden; ?>'>
                                                <input type='hidden' readonly class='form-control-plaintext text-center'
                                                    value='<?php echo $peso; ?>'
                                                    id='peso<?php echo $idorden; ?>'
                                                    name='peso<?php echo $idorden; ?>'>
                                                <input type='hidden' readonly class='form-control-plaintext text-center'
                                                    value='<?php echo $idact; ?>'
                                                    id='actividad' name='actividad'>
                                            </div>
                                        </td> -->
                                        <?php } ?>
                                        <?php if ($_SESSION['cargoid']!=2) 
                                            {   echo "
                                                <td>".$idorden."</td>
                                                <td>".$fecha."</td>
                                                <td>".$region."</td>
                                                <td>".$comuna."</td>
                                                <td>".$cantidad."</td>
                                                <td>".$metros."</td>
                                                <td>".$peso."</td>
                                                <td>".$qsobres."</td>
                                                <td>".$tipopago."</td>
                                                <td>$".number_format((int)$valordeclarado, 0, ',', '.')."</td>
                                                <td>$".number_format((int)$valor, 0, ',', '.')."</td>
                                    </tr> ";
                                        } else {
                                        echo"
                                        <td>".$idorden."</td>
                                        <td>".$fecha."</td>
                                        <td>".$region."</td>
                                        <td>".$provincia."</td>
                                        <td>".$comuna."</td>
                                        <td>".$cantidad."</td>
                                        <td>".$metros."</td>
                                        <td>".$peso."</td>
                                        <td>".$qsobres."</td>
                                        <td>".$tipopago."</td>
                                    </tr>  ";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php
    include '../includes/footer.php';
    ?>
    <script src="js/validarRUT.js"></script>
    <script type="text/javascript" src="js/order_new.js"></script>
    
</body>