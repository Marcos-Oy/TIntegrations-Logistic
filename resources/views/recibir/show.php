<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir</title>
    <?php
        include ('../layouts/dependencies.php');
        include ('../recibir/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include '../layouts/navbar.php';
        include '../layouts/aside.php';
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
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Lista de recepciones</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table  class="table table-striped table-bordered table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ODT</th>
                                                    <th>FECHA</th>
                                                    <th>REGIÓN</th>
                                                    <th>COMUNA</th>
                                                    <th>BULTOS</th>
                                                    <th>DIMENSIONES</th>
                                                    <th>PESO</th>
                                                    <th>CANT. SOBRES</th>
                                                    <th>TIPO DE PAGO</th>
                                                    <th>VALOR DECLARADO</th>
                                                    <th>TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>dato1</td>
                                                    <td>dato2</td>
                                                    <td>dato3</td>
                                                    <td>dato4</td>
                                                    <td>dato5</td>
                                                    <td>dato6</td>
                                                    <td>dato7</td>
                                                    <td>dato8</td>
                                                    <td>dato9</td>
                                                    <td>dato10</td>
                                                    <td>dato11</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>dato1</td>
                                                    <td>dato2</td>
                                                    <td>dato3</td>
                                                    <td>dato4</td>
                                                    <td>dato5</td>
                                                    <td>dato6</td>
                                                    <td>dato7</td>
                                                    <td>dato8</td>
                                                    <td>dato9</td>
                                                    <td>dato10</td>
                                                    <td>dato11</td>
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
        include '../layouts/footer.php';
    ?>
</body>