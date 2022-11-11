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
            <div class="h1 text-center text-primary">Recepcion de Ordenes</div>
            <form method="post">
                <div class="container text-center ">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Indique el Texto " aria-label="Username"
                            aria-describedby="basic-addon1">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <button type="button" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                            <font _mstmutation="1">BUSCAR</font> 
                        </button>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <button type="button" class="btn btn-warning">LIMPIAR</button>
                    </div>
                </div>
            </form>
            <form method="post">
                <div class="container text-center ">
                    <div class="input-group mb-2 ">
                        <input type="text" class="form-control" placeholder="Indique el Texto " aria-label="Username"
                            aria-describedby="basic-addon1">&nbsp; &nbsp; 
                        <button type="button" class="btn btn-success">RECIBIR ENTREGA</button>
                    </div>
                </div>
            </form>
            <form method="POST" action="recibirorden.php">
                <div class="container">
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-primary col" name="entrega" value="Recibir Entrega">
                            RECIBIR ENTREGA
                        </button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <button type="button" class="btn btn-success col " name="devolucion" value="Recibir Devolución">
                            RECIBIR DEVOLUCION
                        </button>
                    </div>
                </div>
                <!-- Main content -->
                <div class="container  table-responsive">
                        <table class="table table-success  text-center">
                            <thead>
                                <tr>
                                    <th></th>
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