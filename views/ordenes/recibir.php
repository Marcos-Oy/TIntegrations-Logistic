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
                <div class="container row align-items-start" >
                    <div class=" col-6">
                        <div class="input-group w-50 ">
                                <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="basic-addon1" _mstplaceholder="567281" _mstaria-label="567281">                            
                        </div>
                    </div>
                    <div class=" col-3">    
                            <button type="button" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                                <font _mstmutation="1">BUSCAR</font>
                            </button>
                    </div>
                    <div class=" col-3">
                            <button type="button" class="btn btn-warning">LIMPIAR</button>
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
    include '../includes/footer.php';
    ?>
    <script src="js/validarRUT.js"></script>
    <script type="text/javascript" src="js/order_new.js"></script>
    
</body>