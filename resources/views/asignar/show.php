<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar</title>
    <?php
        include ('../layouts/dependencies.php');
        include ('../asignar/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
            include '../layouts/navbar.php';
            include '../layouts/aside.php';
        ?>
        <div class="content-wrapper">
            <!-- Asignar -->
            <div class="card card-blue">
                <h5 class="card-header text-center">Asignar Orden</h5>
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="orden">Nº de Orden:</label>
                                <input type="number" class="form-control" id="orden" placeholder="0">
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="bultos">Total de bultos:</label>
                                <input type="number" class="form-control" id="bultos" placeholder="0">
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="peso">Peso Total:</label>
                                <input type="number" class="form-control" id="peso" placeholder="0">
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="peso">Peso Total:</label>
                                <input type="number" class="form-control" id="peso" placeholder="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <select class="form-control" id="empresa" place>
                                    <option value="">Seleccione repartidor</option>
                                    <option value="AESCDE">Alejandro Escobar Deuma</option>
                                    <option value="ASEPGO">Antonio Sepulveda Gonzalez</option>
                                    <option value="CGUTSA">Carlos Gutierrez Salazar</option>
                                    <option value="CMARSO">Cristian Martinez Soto</option>
                                    <option value="COYAAS">Carlos Oyaneder Astudillo</option>
                                    <option value="DBUSPE">Daniel Bustamante Peña</option>
                                    <option value="FSALCO">Francisco Saldias Correa</option>
                                    <option value="FVASFL">Felipe Vasquez Flores</option>
                                    <option value="GROJRO">Gonzalo Rojas Romero</option>
                                    <option value="JDOMRE">Jonathan Dominguez Reyes</option>
                                    <option value="JPERPE">Juan Perez Perez</option>
                                    <option value="LVASFL">Luis Vasquez Flores</option>
                                    <option value="MBURPE">Macarena Burrell Perez</option>
                                    <option value="OPERMA">Oscar Perez Marin</option>
                                    <option value="PCALSO">Pablo Calderon Solis</option>
                                    <option value="RMUNRO">Rodrigo Munoz Romero</option>
                                    <option value="SMU">Sebastian Muñoz Saavedra</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" checked="">
                                    <label class="form-check-label">En transito</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado">
                                    <label class="form-check-label">En reparto</label>
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                <button type="submit" class="btn btn-success mb-2">Asignar</button>
                            </div>
                            <div class="form-group col-lg-3">
                                <button type="submit" class="btn btn-warning mb-2">Devolver</button>
                            </div>
                        </div>
                    </form>
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
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="8841" id="8841">
                                        <input type="hidden" value="5500" id="valor8841" name="valor8841">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros8841" name="metros8841">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.10" id="peso8841" name="peso8841">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos8841" name="bultos8841">

                                    </div>
                                </td>

                                <td>8841</td>
                                <td>Transporte</td>
                                <td>10-06-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.10</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=8841"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=8841" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=8841"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(8841)" value="8841"
                                        href="ordernull.php?id=8841"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12087" id="12087">
                                        <input type="hidden" value="7000" id="valor12087" name="valor12087">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros12087" name="metros12087">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.10" id="peso12087" name="peso12087">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12087" name="bultos12087">

                                    </div>
                                </td>

                                <td>12087</td>
                                <td>Transporte</td>
                                <td>18-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>1.10</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12087"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12087" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12087"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12087)" value="12087"
                                        href="ordernull.php?id=12087"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12127" id="12127">
                                        <input type="hidden" value="6500" id="valor12127" name="valor12127">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros12127" name="metros12127">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.90" id="peso12127" name="peso12127">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12127" name="bultos12127">

                                    </div>
                                </td>

                                <td>12127</td>
                                <td>Transporte</td>
                                <td>19-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>0.90</td>
                                <td>0</td>
                                <td>$6.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12127"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12127" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12127"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12127)" value="12127"
                                        href="ordernull.php?id=12127"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12202" id="12202">
                                        <input type="hidden" value="5500" id="valor12202" name="valor12202">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros12202" name="metros12202">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.40" id="peso12202" name="peso12202">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12202" name="bultos12202">

                                    </div>
                                </td>

                                <td>12202</td>
                                <td>Transporte</td>
                                <td>22-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1.40</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12202"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12202" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12202"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12202)" value="12202"
                                        href="ordernull.php?id=12202"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12254" id="12254">
                                        <input type="hidden" value="12000" id="valor12254" name="valor12254">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros12254" name="metros12254">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="10.80" id="peso12254" name="peso12254">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12254" name="bultos12254">

                                    </div>
                                </td>

                                <td>12254</td>
                                <td>Transporte</td>
                                <td>23-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>10.80</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12254"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12254" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12254"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12254)" value="12254"
                                        href="ordernull.php?id=12254"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12314" id="12314">
                                        <input type="hidden" value="5500" id="valor12314" name="valor12314">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros12314" name="metros12314">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.10" id="peso12314" name="peso12314">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12314" name="bultos12314">

                                    </div>
                                </td>

                                <td>12314</td>
                                <td>Transporte</td>
                                <td>24-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.10</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12314"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12314" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12314"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12314)" value="12314"
                                        href="ordernull.php?id=12314"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12331" id="12331">
                                        <input type="hidden" value="7500" id="valor12331" name="valor12331">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros12331" name="metros12331">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.70" id="peso12331" name="peso12331">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12331" name="bultos12331">

                                    </div>
                                </td>

                                <td>12331</td>
                                <td>Transporte</td>
                                <td>24-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>2.70</td>
                                <td>0</td>
                                <td>$7.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12331"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12331" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12331"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12331)" value="12331"
                                        href="ordernull.php?id=12331"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12336" id="12336">
                                        <input type="hidden" value="30000" id="valor12336" name="valor12336">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.25" id="metros12336" name="metros12336">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="16.30" id="peso12336" name="peso12336">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12336" name="bultos12336">

                                    </div>
                                </td>

                                <td>12336</td>
                                <td>Transporte</td>
                                <td>24-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.25</td>
                                <td>16.30</td>
                                <td>0</td>
                                <td>$30.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12336"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12336" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12336"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12336)" value="12336"
                                        href="ordernull.php?id=12336"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12344" id="12344">
                                        <input type="hidden" value="5500" id="valor12344" name="valor12344">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros12344" name="metros12344">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.20" id="peso12344" name="peso12344">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12344" name="bultos12344">

                                    </div>
                                </td>

                                <td>12344</td>
                                <td>Transporte</td>
                                <td>24-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1.20</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12344"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12344" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12344"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12344)" value="12344"
                                        href="ordernull.php?id=12344"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12385" id="12385">
                                        <input type="hidden" value="19000" id="valor12385" name="valor12385">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.13" id="metros12385" name="metros12385">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="20.00" id="peso12385" name="peso12385">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos12385" name="bultos12385">

                                    </div>
                                </td>

                                <td>12385</td>
                                <td>Transporte</td>
                                <td>25-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.13</td>
                                <td>20.00</td>
                                <td>0</td>
                                <td>$19.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12385"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12385" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12385"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12385)" value="12385"
                                        href="ordernull.php?id=12385"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12408" id="12408">
                                        <input type="hidden" value="20000" id="valor12408" name="valor12408">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros12408" name="metros12408">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="29.70" id="peso12408" name="peso12408">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos12408" name="bultos12408">

                                    </div>
                                </td>

                                <td>12408</td>
                                <td>Transporte</td>
                                <td>25-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.12</td>
                                <td>29.70</td>
                                <td>0</td>
                                <td>$20.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12408"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12408" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12408"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12408)" value="12408"
                                        href="ordernull.php?id=12408"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12417" id="12417">
                                        <input type="hidden" value="29000" id="valor12417" name="valor12417">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.26" id="metros12417" name="metros12417">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="13.90" id="peso12417" name="peso12417">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3" id="bultos12417" name="bultos12417">

                                    </div>
                                </td>

                                <td>12417</td>
                                <td>Transporte</td>
                                <td>25-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>3</td>
                                <td>0.26</td>
                                <td>13.90</td>
                                <td>0</td>
                                <td>$29.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12417"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12417" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12417"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12417)" value="12417"
                                        href="ordernull.php?id=12417"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12491" id="12491">
                                        <input type="hidden" value="40500" id="valor12491" name="valor12491">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.59" id="metros12491" name="metros12491">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="12.00" id="peso12491" name="peso12491">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12491" name="bultos12491">

                                    </div>
                                </td>

                                <td>12491</td>
                                <td>Transporte</td>
                                <td>29-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.59</td>
                                <td>12.00</td>
                                <td>0</td>
                                <td>$40.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12491"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12491" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12491"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12491)" value="12491"
                                        href="ordernull.php?id=12491"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12520" id="12520">
                                        <input type="hidden" value="29000" id="valor12520" name="valor12520">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.22" id="metros12520" name="metros12520">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="13.70" id="peso12520" name="peso12520">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3" id="bultos12520" name="bultos12520">

                                    </div>
                                </td>

                                <td>12520</td>
                                <td>Transporte</td>
                                <td>30-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>3</td>
                                <td>0.22</td>
                                <td>13.70</td>
                                <td>0</td>
                                <td>$29.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12520"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12520" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12520"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12520)" value="12520"
                                        href="ordernull.php?id=12520"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12553" id="12553">
                                        <input type="hidden" value="29200" id="valor12553" name="valor12553">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.2" id="metros12553" name="metros12553">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="30.20" id="peso12553" name="peso12553">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12553" name="bultos12553">

                                    </div>
                                </td>

                                <td>12553</td>
                                <td>Transporte</td>
                                <td>30-08-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.2</td>
                                <td>30.20</td>
                                <td>0</td>
                                <td>$29.200</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12553"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12553" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12553"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12553)" value="12553"
                                        href="ordernull.php?id=12553"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12666" id="12666">
                                        <input type="hidden" value="19600" id="valor12666" name="valor12666">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.15" id="metros12666" name="metros12666">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="11.50" id="peso12666" name="peso12666">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12666" name="bultos12666">

                                    </div>
                                </td>

                                <td>12666</td>
                                <td>Transporte</td>
                                <td>01-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.15</td>
                                <td>11.50</td>
                                <td>0</td>
                                <td>$19.600</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12666"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12666" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12666"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12666)" value="12666"
                                        href="ordernull.php?id=12666"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12688" id="12688">
                                        <input type="hidden" value="12000" id="valor12688" name="valor12688">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros12688" name="metros12688">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="19.00" id="peso12688" name="peso12688">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12688" name="bultos12688">

                                    </div>
                                </td>

                                <td>12688</td>
                                <td>Transporte</td>
                                <td>02-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>19.00</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12688"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12688" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12688"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12688)" value="12688"
                                        href="ordernull.php?id=12688"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12756" id="12756">
                                        <input type="hidden" value="7500" id="valor12756" name="valor12756">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros12756" name="metros12756">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.00" id="peso12756" name="peso12756">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12756" name="bultos12756">

                                    </div>
                                </td>

                                <td>12756</td>
                                <td>Transporte</td>
                                <td>05-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>5.00</td>
                                <td>0</td>
                                <td>$7.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12756"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12756" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12756"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12756)" value="12756"
                                        href="ordernull.php?id=12756"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12761" id="12761">
                                        <input type="hidden" value="5500" id="valor12761" name="valor12761">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros12761" name="metros12761">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.70" id="peso12761" name="peso12761">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12761" name="bultos12761">

                                    </div>
                                </td>

                                <td>12761</td>
                                <td>Transporte</td>
                                <td>05-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>0.70</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12761"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12761" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12761"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12761)" value="12761"
                                        href="ordernull.php?id=12761"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12900" id="12900">
                                        <input type="hidden" value="14000" id="valor12900" name="valor12900">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros12900" name="metros12900">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.20" id="peso12900" name="peso12900">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos12900" name="bultos12900">

                                    </div>
                                </td>

                                <td>12900</td>
                                <td>Transporte</td>
                                <td>08-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.04</td>
                                <td>5.20</td>
                                <td>0</td>
                                <td>$14.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12900"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12900" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12900"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12900)" value="12900"
                                        href="ordernull.php?id=12900"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12929" id="12929">
                                        <input type="hidden" value="29200" id="valor12929" name="valor12929">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.24" id="metros12929" name="metros12929">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="48.20" id="peso12929" name="peso12929">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos12929" name="bultos12929">

                                    </div>
                                </td>

                                <td>12929</td>
                                <td>Transporte</td>
                                <td>09-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.24</td>
                                <td>48.20</td>
                                <td>0</td>
                                <td>$29.200</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12929"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12929" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12929"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12929)" value="12929"
                                        href="ordernull.php?id=12929"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12938" id="12938">
                                        <input type="hidden" value="7500" id="valor12938" name="valor12938">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros12938" name="metros12938">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4.20" id="peso12938" name="peso12938">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12938" name="bultos12938">

                                    </div>
                                </td>

                                <td>12938</td>
                                <td>Transporte</td>
                                <td>09-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>4.20</td>
                                <td>0</td>
                                <td>$7.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12938"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12938" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12938"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12938)" value="12938"
                                        href="ordernull.php?id=12938"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12966" id="12966">
                                        <input type="hidden" value="19600" id="valor12966" name="valor12966">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.15" id="metros12966" name="metros12966">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="19.00" id="peso12966" name="peso12966">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12966" name="bultos12966">

                                    </div>
                                </td>

                                <td>12966</td>
                                <td>Transporte</td>
                                <td>09-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.15</td>
                                <td>19.00</td>
                                <td>0</td>
                                <td>$19.600</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12966"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12966" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12966"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12966)" value="12966"
                                        href="ordernull.php?id=12966"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13024" id="13024">
                                        <input type="hidden" value="7500" id="valor13024" name="valor13024">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros13024" name="metros13024">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.10" id="peso13024" name="peso13024">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13024" name="bultos13024">

                                    </div>
                                </td>

                                <td>13024</td>
                                <td>Transporte</td>
                                <td>13-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>2.10</td>
                                <td>0</td>
                                <td>$7.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13024"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13024" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13024"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13024)" value="13024"
                                        href="ordernull.php?id=13024"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13066" id="13066">
                                        <input type="hidden" value="8500" id="valor13066" name="valor13066">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros13066" name="metros13066">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="9.00" id="peso13066" name="peso13066">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13066" name="bultos13066">

                                    </div>
                                </td>

                                <td>13066</td>
                                <td>Transporte</td>
                                <td>13-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>9.00</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13066"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13066" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13066"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13066)" value="13066"
                                        href="ordernull.php?id=13066"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13098" id="13098">
                                        <input type="hidden" value="5500" id="valor13098" name="valor13098">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros13098" name="metros13098">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.40" id="peso13098" name="peso13098">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13098" name="bultos13098">

                                    </div>
                                </td>

                                <td>13098</td>
                                <td>Transporte</td>
                                <td>14-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>0.40</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13098"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13098" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13098"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13098)" value="13098"
                                        href="ordernull.php?id=13098"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13108" id="13108">
                                        <input type="hidden" value="12000" id="valor13108" name="valor13108">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.06" id="metros13108" name="metros13108">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3.90" id="peso13108" name="peso13108">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13108" name="bultos13108">

                                    </div>
                                </td>

                                <td>13108</td>
                                <td>Transporte</td>
                                <td>15-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.06</td>
                                <td>3.90</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13108"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13108" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13108"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13108)" value="13108"
                                        href="ordernull.php?id=13108"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13120" id="13120">
                                        <input type="hidden" value="54000" id="valor13120" name="valor13120">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.6" id="metros13120" name="metros13120">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="73.10" id="peso13120" name="peso13120">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="6" id="bultos13120" name="bultos13120">

                                    </div>
                                </td>

                                <td>13120</td>
                                <td>Transporte</td>
                                <td>20-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>6</td>
                                <td>0.6</td>
                                <td>73.10</td>
                                <td>0</td>
                                <td>$54.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13120"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13120" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13120"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13120)" value="13120"
                                        href="ordernull.php?id=13120"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13123" id="13123">
                                        <input type="hidden" value="29200" id="valor13123" name="valor13123">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.19" id="metros13123" name="metros13123">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="52.80" id="peso13123" name="peso13123">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3" id="bultos13123" name="bultos13123">

                                    </div>
                                </td>

                                <td>13123</td>
                                <td>Transporte</td>
                                <td>20-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>3</td>
                                <td>0.19</td>
                                <td>52.80</td>
                                <td>0</td>
                                <td>$29.200</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13123"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13123" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13123"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13123)" value="13123"
                                        href="ordernull.php?id=13123"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13135" id="13135">
                                        <input type="hidden" value="6600" id="valor13135" name="valor13135">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros13135" name="metros13135">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.30" id="peso13135" name="peso13135">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13135" name="bultos13135">

                                    </div>
                                </td>

                                <td>13135</td>
                                <td>Transporte</td>
                                <td>20-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>2.30</td>
                                <td>0</td>
                                <td>$6.600</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13135"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13135" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13135"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13135)" value="13135"
                                        href="ordernull.php?id=13135"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13148" id="13148">
                                        <input type="hidden" value="5500" id="valor13148" name="valor13148">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros13148" name="metros13148">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.60" id="peso13148" name="peso13148">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13148" name="bultos13148">

                                    </div>
                                </td>

                                <td>13148</td>
                                <td>Transporte</td>
                                <td>20-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.60</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13148"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13148" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13148"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13148)" value="13148"
                                        href="ordernull.php?id=13148"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13170" id="13170">
                                        <input type="hidden" value="14500" id="valor13170" name="valor13170">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.1" id="metros13170" name="metros13170">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="14.70" id="peso13170" name="peso13170">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13170" name="bultos13170">

                                    </div>
                                </td>

                                <td>13170</td>
                                <td>Transporte</td>
                                <td>21-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.1</td>
                                <td>14.70</td>
                                <td>0</td>
                                <td>$14.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13170"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13170" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13170"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13170)" value="13170"
                                        href="ordernull.php?id=13170"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13184" id="13184">
                                        <input type="hidden" value="6000" id="valor13184" name="valor13184">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros13184" name="metros13184">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.90" id="peso13184" name="peso13184">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13184" name="bultos13184">

                                    </div>
                                </td>

                                <td>13184</td>
                                <td>Transporte</td>
                                <td>21-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.90</td>
                                <td>0</td>
                                <td>$6.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13184"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13184" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13184"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13184)" value="13184"
                                        href="ordernull.php?id=13184"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13212" id="13212">
                                        <input type="hidden" value="5500" id="valor13212" name="valor13212">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros13212" name="metros13212">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.00" id="peso13212" name="peso13212">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13212" name="bultos13212">

                                    </div>
                                </td>

                                <td>13212</td>
                                <td>Transporte</td>
                                <td>22-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1.00</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13212"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13212" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13212"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13212)" value="13212"
                                        href="ordernull.php?id=13212"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13233" id="13233">
                                        <input type="hidden" value="35000" id="valor13233" name="valor13233">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.53" id="metros13233" name="metros13233">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="43.50" id="peso13233" name="peso13233">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5" id="bultos13233" name="bultos13233">

                                    </div>
                                </td>

                                <td>13233</td>
                                <td>Transporte</td>
                                <td>23-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>5</td>
                                <td>0.53</td>
                                <td>43.50</td>
                                <td>0</td>
                                <td>$35.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13233"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13233" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13233"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13233)" value="13233"
                                        href="ordernull.php?id=13233"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13244" id="13244">
                                        <input type="hidden" value="6500" id="valor13244" name="valor13244">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros13244" name="metros13244">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.40" id="peso13244" name="peso13244">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13244" name="bultos13244">

                                    </div>
                                </td>

                                <td>13244</td>
                                <td>Transporte</td>
                                <td>26-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>1.40</td>
                                <td>0</td>
                                <td>$6.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13244"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13244" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13244"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13244)" value="13244"
                                        href="ordernull.php?id=13244"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13266" id="13266">
                                        <input type="hidden" value="22000" id="valor13266" name="valor13266">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.18" id="metros13266" name="metros13266">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="15.00" id="peso13266" name="peso13266">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos13266" name="bultos13266">

                                    </div>
                                </td>

                                <td>13266</td>
                                <td>Transporte</td>
                                <td>27-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.18</td>
                                <td>15.00</td>
                                <td>0</td>
                                <td>$22.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13266"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13266" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13266"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13266)" value="13266"
                                        href="ordernull.php?id=13266"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13307" id="13307">
                                        <input type="hidden" value="14000" id="valor13307" name="valor13307">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.05" id="metros13307" name="metros13307">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.00" id="peso13307" name="peso13307">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos13307" name="bultos13307">

                                    </div>
                                </td>

                                <td>13307</td>
                                <td>Transporte</td>
                                <td>29-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.05</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>$14.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13307"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13307" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13307"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13307)" value="13307"
                                        href="ordernull.php?id=13307"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13311" id="13311">
                                        <input type="hidden" value="15600" id="valor13311" name="valor13311">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.05" id="metros13311" name="metros13311">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="21.20" id="peso13311" name="peso13311">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos13311" name="bultos13311">

                                    </div>
                                </td>

                                <td>13311</td>
                                <td>Transporte</td>
                                <td>30-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>2</td>
                                <td>0.05</td>
                                <td>21.20</td>
                                <td>0</td>
                                <td>$15.600</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13311"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13311" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13311"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13311)" value="13311"
                                        href="ordernull.php?id=13311"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13321" id="13321">
                                        <input type="hidden" value="5500" id="valor13321" name="valor13321">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros13321" name="metros13321">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.60" id="peso13321" name="peso13321">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13321" name="bultos13321">

                                    </div>
                                </td>

                                <td>13321</td>
                                <td>Transporte</td>
                                <td>30-09-2022</td>
                                <td>Chillán</td>
                                <td>Chillán</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>0.60</td>
                                <td>0</td>
                                <td>$5.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13321"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13321" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13321"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13321)" value="13321"
                                        href="ordernull.php?id=13321"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="11981" id="11981">
                                        <input type="hidden" value="25000" id="valor11981" name="valor11981">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.2" id="metros11981" name="metros11981">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="47.90" id="peso11981" name="peso11981">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5" id="bultos11981" name="bultos11981">

                                    </div>
                                </td>

                                <td>11981</td>
                                <td>Transporte</td>
                                <td>17-08-2022</td>
                                <td>Chillán</td>
                                <td>San Carlos</td>
                                <td>5</td>
                                <td>0.2</td>
                                <td>47.90</td>
                                <td>0</td>
                                <td>$25.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=11981"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=11981" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=11981"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(11981)" value="11981"
                                        href="ordernull.php?id=11981"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12316" id="12316">
                                        <input type="hidden" value="18000" id="valor12316" name="valor12316">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.13" id="metros12316" name="metros12316">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="35.16" id="peso12316" name="peso12316">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3" id="bultos12316" name="bultos12316">

                                    </div>
                                </td>

                                <td>12316</td>
                                <td>Transporte</td>
                                <td>24-08-2022</td>
                                <td>Chillán</td>
                                <td>San Carlos</td>
                                <td>3</td>
                                <td>0.13</td>
                                <td>35.16</td>
                                <td>0</td>
                                <td>$18.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12316"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12316" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12316"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12316)" value="12316"
                                        href="ordernull.php?id=12316"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12707" id="12707">
                                        <input type="hidden" value="20000" id="valor12707" name="valor12707">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros12707" name="metros12707">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="29.60" id="peso12707" name="peso12707">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos12707" name="bultos12707">

                                    </div>
                                </td>

                                <td>12707</td>
                                <td>Transporte</td>
                                <td>02-09-2022</td>
                                <td>Chillán</td>
                                <td>San Carlos</td>
                                <td>2</td>
                                <td>0.12</td>
                                <td>29.60</td>
                                <td>0</td>
                                <td>$20.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12707"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12707" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12707"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12707)" value="12707"
                                        href="ordernull.php?id=12707"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12722" id="12722">
                                        <input type="hidden" value="12000" id="valor12722" name="valor12722">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros12722" name="metros12722">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="11.50" id="peso12722" name="peso12722">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12722" name="bultos12722">

                                    </div>
                                </td>

                                <td>12722</td>
                                <td>Transporte</td>
                                <td>02-09-2022</td>
                                <td>Chillán</td>
                                <td>San Carlos</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>11.50</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12722"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12722" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12722"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12722)" value="12722"
                                        href="ordernull.php?id=12722"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12769" id="12769">
                                        <input type="hidden" value="18000" id="valor12769" name="valor12769">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.14" id="metros12769" name="metros12769">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="23.60" id="peso12769" name="peso12769">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos12769" name="bultos12769">

                                    </div>
                                </td>

                                <td>12769</td>
                                <td>Transporte</td>
                                <td>05-09-2022</td>
                                <td>Chillán</td>
                                <td>San Carlos</td>
                                <td>2</td>
                                <td>0.14</td>
                                <td>23.60</td>
                                <td>0</td>
                                <td>$18.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12769"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12769" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12769"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12769)" value="12769"
                                        href="ordernull.php?id=12769"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="12848" id="12848">
                                        <input type="hidden" value="12600" id="valor12848" name="valor12848">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros12848" name="metros12848">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="14.10" id="peso12848" name="peso12848">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos12848" name="bultos12848">

                                    </div>
                                </td>

                                <td>12848</td>
                                <td>Transporte</td>
                                <td>07-09-2022</td>
                                <td>Chillán</td>
                                <td>San Carlos</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>14.10</td>
                                <td>0</td>
                                <td>$12.600</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=12848"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=12848" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=12848"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(12848)" value="12848"
                                        href="ordernull.php?id=12848"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3078" id="3078">
                                        <input type="hidden" value="8500" id="valor3078" name="valor3078">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros3078" name="metros3078">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3.60" id="peso3078" name="peso3078">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3078" name="bultos3078">

                                    </div>
                                </td>

                                <td>3078</td>
                                <td>Transporte</td>
                                <td>25-03-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>3.60</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3078"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3078" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3078"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3078)" value="3078"
                                        href="ordernull.php?id=3078"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3426" id="3426">
                                        <input type="hidden" value="28000" id="valor3426" name="valor3426">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.2" id="metros3426" name="metros3426">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="22.65" id="peso3426" name="peso3426">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3426" name="bultos3426">

                                    </div>
                                </td>

                                <td>3426</td>
                                <td>Transporte</td>
                                <td>30-03-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.2</td>
                                <td>22.65</td>
                                <td>0</td>
                                <td>$28.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3426"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3426" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3426"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3426)" value="3426"
                                        href="ordernull.php?id=3426"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5500" id="5500">
                                        <input type="hidden" value="9500" id="valor5500" name="valor5500">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros5500" name="metros5500">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="7.00" id="peso5500" name="peso5500">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5500" name="bultos5500">

                                    </div>
                                </td>

                                <td>5500</td>
                                <td>Transporte</td>
                                <td>26-04-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>7.00</td>
                                <td>0</td>
                                <td>$9.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5500"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5500" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5500"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5500)" value="5500"
                                        href="ordernull.php?id=5500"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6773" id="6773">
                                        <input type="hidden" value="14000" id="valor6773" name="valor6773">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.07" id="metros6773" name="metros6773">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.30" id="peso6773" name="peso6773">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6773" name="bultos6773">

                                    </div>
                                </td>

                                <td>6773</td>
                                <td>Transporte</td>
                                <td>11-05-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.07</td>
                                <td>5.30</td>
                                <td>0</td>
                                <td>$14.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6773"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6773" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6773"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6773)" value="6773"
                                        href="ordernull.php?id=6773"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6893" id="6893">
                                        <input type="hidden" value="8500" id="valor6893" name="valor6893">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros6893" name="metros6893">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.85" id="peso6893" name="peso6893">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6893" name="bultos6893">

                                    </div>
                                </td>

                                <td>6893</td>
                                <td>Transporte</td>
                                <td>12-05-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>5.85</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6893"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6893" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6893"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6893)" value="6893"
                                        href="ordernull.php?id=6893"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7091" id="7091">
                                        <input type="hidden" value="8500" id="valor7091" name="valor7091">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros7091" name="metros7091">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.50" id="peso7091" name="peso7091">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos7091" name="bultos7091">

                                    </div>
                                </td>

                                <td>7091</td>
                                <td>Transporte</td>
                                <td>16-05-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>2.50</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7091"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7091" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7091"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7091)" value="7091"
                                        href="ordernull.php?id=7091"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="8968" id="8968">
                                        <input type="hidden" value="7000" id="valor8968" name="valor8968">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros8968" name="metros8968">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.00" id="peso8968" name="peso8968">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos8968" name="bultos8968">

                                    </div>
                                </td>

                                <td>8968</td>
                                <td>Transporte</td>
                                <td>13-06-2022</td>
                                <td>Concepción</td>
                                <td>Arauco</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=8968"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=8968" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=8968"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(8968)" value="8968"
                                        href="ordernull.php?id=8968"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="1067" id="1067">
                                        <input type="hidden" value="13500" id="valor1067" name="valor1067">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.05" id="metros1067" name="metros1067">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.00" id="peso1067" name="peso1067">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos1067" name="bultos1067">

                                    </div>
                                </td>

                                <td>1067</td>
                                <td>Transporte</td>
                                <td>28-02-2022</td>
                                <td>Concepción</td>
                                <td>Cañete</td>
                                <td>1</td>
                                <td>0.05</td>
                                <td>5.00</td>
                                <td>0</td>
                                <td>$13.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=1067"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=1067" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=1067"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(1067)" value="1067"
                                        href="ordernull.php?id=1067"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="1669" id="1669">
                                        <input type="hidden" value="7500" id="valor1669" name="valor1669">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros1669" name="metros1669">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3.20" id="peso1669" name="peso1669">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos1669" name="bultos1669">

                                    </div>
                                </td>

                                <td>1669</td>
                                <td>Transporte</td>
                                <td>07-03-2022</td>
                                <td>Concepción</td>
                                <td>Cañete</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>3.20</td>
                                <td>0</td>
                                <td>$7.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=1669"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=1669" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=1669"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(1669)" value="1669"
                                        href="ordernull.php?id=1669"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3774" id="3774">
                                        <input type="hidden" value="12000" id="valor3774" name="valor3774">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros3774" name="metros3774">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3.60" id="peso3774" name="peso3774">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3774" name="bultos3774">

                                    </div>
                                </td>

                                <td>3774</td>
                                <td>Transporte</td>
                                <td>04-04-2022</td>
                                <td>Concepción</td>
                                <td>Cañete</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>3.60</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3774"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3774" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3774"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3774)" value="3774"
                                        href="ordernull.php?id=3774"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6780" id="6780">
                                        <input type="hidden" value="8500" id="valor6780" name="valor6780">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros6780" name="metros6780">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.00" id="peso6780" name="peso6780">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6780" name="bultos6780">

                                    </div>
                                </td>

                                <td>6780</td>
                                <td>Transporte</td>
                                <td>11-05-2022</td>
                                <td>Concepción</td>
                                <td>Cañete</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6780"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6780" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6780"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6780)" value="6780"
                                        href="ordernull.php?id=6780"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6924" id="6924">
                                        <input type="hidden" value="8500" id="valor6924" name="valor6924">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros6924" name="metros6924">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="6.00" id="peso6924" name="peso6924">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6924" name="bultos6924">

                                    </div>
                                </td>

                                <td>6924</td>
                                <td>Transporte</td>
                                <td>13-05-2022</td>
                                <td>Concepción</td>
                                <td>Cañete</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>6.00</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6924"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6924" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6924"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6924)" value="6924"
                                        href="ordernull.php?id=6924"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7734" id="7734">
                                        <input type="hidden" value="8000" id="valor7734" name="valor7734">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros7734" name="metros7734">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="6.50" id="peso7734" name="peso7734">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos7734" name="bultos7734">

                                    </div>
                                </td>

                                <td>7734</td>
                                <td>Transporte</td>
                                <td>25-05-2022</td>
                                <td>Concepción</td>
                                <td>Cañete</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>6.50</td>
                                <td>0</td>
                                <td>$8.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7734"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7734" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7734"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7734)" value="7734"
                                        href="ordernull.php?id=7734"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3759" id="3759">
                                        <input type="hidden" value="25000" id="valor3759" name="valor3759">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.29" id="metros3759" name="metros3759">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="37.85" id="peso3759" name="peso3759">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos3759" name="bultos3759">

                                    </div>
                                </td>

                                <td>3759</td>
                                <td>Transporte</td>
                                <td>04-04-2022</td>
                                <td>Concepción</td>
                                <td>Curanilahue</td>
                                <td>2</td>
                                <td>0.29</td>
                                <td>37.85</td>
                                <td>0</td>
                                <td>$25.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3759"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3759" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3759"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3759)" value="3759"
                                        href="ordernull.php?id=3759"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4147" id="4147">
                                        <input type="hidden" value="7500" id="valor4147" name="valor4147">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros4147" name="metros4147">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.90" id="peso4147" name="peso4147">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4147" name="bultos4147">

                                    </div>
                                </td>

                                <td>4147</td>
                                <td>Transporte</td>
                                <td>07-04-2022</td>
                                <td>Concepción</td>
                                <td>Curanilahue</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>1.90</td>
                                <td>0</td>
                                <td>$7.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4147"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4147" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4147"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4147)" value="4147"
                                        href="ordernull.php?id=4147"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6316" id="6316">
                                        <input type="hidden" value="28000" id="valor6316" name="valor6316">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.26" id="metros6316" name="metros6316">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="43.25" id="peso6316" name="peso6316">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos6316" name="bultos6316">

                                    </div>
                                </td>

                                <td>6316</td>
                                <td>Transporte</td>
                                <td>05-05-2022</td>
                                <td>Concepción</td>
                                <td>Curanilahue</td>
                                <td>2</td>
                                <td>0.26</td>
                                <td>43.25</td>
                                <td>0</td>
                                <td>$28.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6316"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6316" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6316"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6316)" value="6316"
                                        href="ordernull.php?id=6316"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7840" id="7840">
                                        <input type="hidden" value="8000" id="valor7840" name="valor7840">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros7840" name="metros7840">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.60" id="peso7840" name="peso7840">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos7840" name="bultos7840">

                                    </div>
                                </td>

                                <td>7840</td>
                                <td>Transporte</td>
                                <td>26-05-2022</td>
                                <td>Concepción</td>
                                <td>Laraquete</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>5.60</td>
                                <td>0</td>
                                <td>$8.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7840"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7840" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7840"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7840)" value="7840"
                                        href="ordernull.php?id=7840"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="8049" id="8049">
                                        <input type="hidden" value="8000" id="valor8049" name="valor8049">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros8049" name="metros8049">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.60" id="peso8049" name="peso8049">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos8049" name="bultos8049">

                                    </div>
                                </td>

                                <td>8049</td>
                                <td>Transporte</td>
                                <td>31-05-2022</td>
                                <td>Concepción</td>
                                <td>Laraquete</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>5.60</td>
                                <td>0</td>
                                <td>$8.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=8049"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=8049" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=8049"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(8049)" value="8049"
                                        href="ordernull.php?id=8049"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="996" id="996">
                                        <input type="hidden" value="18000" id="valor996" name="valor996">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.14" id="metros996" name="metros996">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="16.30" id="peso996" name="peso996">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos996" name="bultos996">

                                    </div>
                                </td>

                                <td>996</td>
                                <td>Transporte</td>
                                <td>28-02-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.14</td>
                                <td>16.30</td>
                                <td>0</td>
                                <td>$18.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=996"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=996" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=996"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(996)" value="996"
                                        href="ordernull.php?id=996"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3900" id="3900">
                                        <input type="hidden" value="20000" id="valor3900" name="valor3900">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.19" id="metros3900" name="metros3900">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="29.00" id="peso3900" name="peso3900">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3900" name="bultos3900">

                                    </div>
                                </td>

                                <td>3900</td>
                                <td>Transporte</td>
                                <td>05-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.19</td>
                                <td>29.00</td>
                                <td>0</td>
                                <td>$20.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3900"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3900" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3900"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3900)" value="3900"
                                        href="ordernull.php?id=3900"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4096" id="4096">
                                        <input type="hidden" value="8500" id="valor4096" name="valor4096">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros4096" name="metros4096">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4.05" id="peso4096" name="peso4096">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4096" name="bultos4096">

                                    </div>
                                </td>

                                <td>4096</td>
                                <td>Transporte</td>
                                <td>07-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>4.05</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4096"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4096" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4096"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4096)" value="4096"
                                        href="ordernull.php?id=4096"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4097" id="4097">
                                        <input type="hidden" value="8500" id="valor4097" name="valor4097">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros4097" name="metros4097">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.70" id="peso4097" name="peso4097">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4097" name="bultos4097">

                                    </div>
                                </td>

                                <td>4097</td>
                                <td>Transporte</td>
                                <td>07-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>5.70</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4097"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4097" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4097"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4097)" value="4097"
                                        href="ordernull.php?id=4097"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4207" id="4207">
                                        <input type="hidden" value="15000" id="valor4207" name="valor4207">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.17" id="metros4207" name="metros4207">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="21.00" id="peso4207" name="peso4207">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4207" name="bultos4207">

                                    </div>
                                </td>

                                <td>4207</td>
                                <td>Transporte</td>
                                <td>08-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.17</td>
                                <td>21.00</td>
                                <td>0</td>
                                <td>$15.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4207"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4207" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4207"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4207)" value="4207"
                                        href="ordernull.php?id=4207"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4239" id="4239">
                                        <input type="hidden" value="18000" id="valor4239" name="valor4239">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros4239" name="metros4239">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="21.10" id="peso4239" name="peso4239">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4239" name="bultos4239">

                                    </div>
                                </td>

                                <td>4239</td>
                                <td>Transporte</td>
                                <td>08-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.12</td>
                                <td>21.10</td>
                                <td>0</td>
                                <td>$18.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4239"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4239" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4239"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4239)" value="4239"
                                        href="ordernull.php?id=4239"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4578" id="4578">
                                        <input type="hidden" value="9500" id="valor4578" name="valor4578">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros4578" name="metros4578">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="7.25" id="peso4578" name="peso4578">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4578" name="bultos4578">

                                    </div>
                                </td>

                                <td>4578</td>
                                <td>Transporte</td>
                                <td>13-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>7.25</td>
                                <td>0</td>
                                <td>$9.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4578"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4578" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4578"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4578)" value="4578"
                                        href="ordernull.php?id=4578"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4911" id="4911">
                                        <input type="hidden" value="9500" id="valor4911" name="valor4911">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros4911" name="metros4911">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="9.15" id="peso4911" name="peso4911">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4911" name="bultos4911">

                                    </div>
                                </td>

                                <td>4911</td>
                                <td>Transporte</td>
                                <td>19-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>9.15</td>
                                <td>0</td>
                                <td>$9.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4911"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4911" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4911"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4911)" value="4911"
                                        href="ordernull.php?id=4911"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5705" id="5705">
                                        <input type="hidden" value="8500" id="valor5705" name="valor5705">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros5705" name="metros5705">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4.65" id="peso5705" name="peso5705">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5705" name="bultos5705">

                                    </div>
                                </td>

                                <td>5705</td>
                                <td>Transporte</td>
                                <td>28-04-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>4.65</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5705"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5705" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5705"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5705)" value="5705"
                                        href="ordernull.php?id=5705"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6001" id="6001">
                                        <input type="hidden" value="6500" id="valor6001" name="valor6001">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros6001" name="metros6001">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.00" id="peso6001" name="peso6001">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6001" name="bultos6001">

                                    </div>
                                </td>

                                <td>6001</td>
                                <td>Transporte</td>
                                <td>02-05-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>1.00</td>
                                <td>0</td>
                                <td>$6.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6001"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6001" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6001"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6001)" value="6001"
                                        href="ordernull.php?id=6001"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7171" id="7171">
                                        <input type="hidden" value="15000" id="valor7171" name="valor7171">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros7171" name="metros7171">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="6.05" id="peso7171" name="peso7171">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos7171" name="bultos7171">

                                    </div>
                                </td>

                                <td>7171</td>
                                <td>Transporte</td>
                                <td>17-05-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0</td>
                                <td>6.05</td>
                                <td>0</td>
                                <td>$15.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7171"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7171" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7171"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7171)" value="7171"
                                        href="ordernull.php?id=7171"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7835" id="7835">
                                        <input type="hidden" value="14000" id="valor7835" name="valor7835">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.07" id="metros7835" name="metros7835">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="6.75" id="peso7835" name="peso7835">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos7835" name="bultos7835">

                                    </div>
                                </td>

                                <td>7835</td>
                                <td>Transporte</td>
                                <td>26-05-2022</td>
                                <td>Concepción</td>
                                <td>Lebu</td>
                                <td>1</td>
                                <td>0.07</td>
                                <td>6.75</td>
                                <td>0</td>
                                <td>$14.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7835"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7835" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7835"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7835)" value="7835"
                                        href="ordernull.php?id=7835"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4475" id="4475">
                                        <input type="hidden" value="46000" id="valor4475" name="valor4475">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.2" id="metros4475" name="metros4475">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="8.70" id="peso4475" name="peso4475">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos4475" name="bultos4475">

                                    </div>
                                </td>

                                <td>4475</td>
                                <td>Transporte</td>
                                <td>12-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Álamos</td>
                                <td>2</td>
                                <td>0.2</td>
                                <td>8.70</td>
                                <td>0</td>
                                <td>$46.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4475"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4475" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4475"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4475)" value="4475"
                                        href="ordernull.php?id=4475"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4633" id="4633">
                                        <input type="hidden" value="7000" id="valor4633" name="valor4633">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros4633" name="metros4633">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.75" id="peso4633" name="peso4633">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4633" name="bultos4633">

                                    </div>
                                </td>

                                <td>4633</td>
                                <td>Transporte</td>
                                <td>13-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Álamos</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>2.75</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4633"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4633" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4633"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4633)" value="4633"
                                        href="ordernull.php?id=4633"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5214" id="5214">
                                        <input type="hidden" value="9500" id="valor5214" name="valor5214">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros5214" name="metros5214">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4.60" id="peso5214" name="peso5214">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5214" name="bultos5214">

                                    </div>
                                </td>

                                <td>5214</td>
                                <td>Transporte</td>
                                <td>22-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Álamos</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>4.60</td>
                                <td>0</td>
                                <td>$9.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5214"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5214" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5214"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5214)" value="5214"
                                        href="ordernull.php?id=5214"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7499" id="7499">
                                        <input type="hidden" value="12000" id="valor7499" name="valor7499">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros7499" name="metros7499">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="27.00" id="peso7499" name="peso7499">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos7499" name="bultos7499">

                                    </div>
                                </td>

                                <td>7499</td>
                                <td>Transporte</td>
                                <td>20-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Álamos</td>
                                <td>1</td>
                                <td>0.12</td>
                                <td>27.00</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7499"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7499" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7499"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7499)" value="7499"
                                        href="ordernull.php?id=7499"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3431" id="3431">
                                        <input type="hidden" value="14500" id="valor3431" name="valor3431">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.1" id="metros3431" name="metros3431">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="18.15" id="peso3431" name="peso3431">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3431" name="bultos3431">

                                    </div>
                                </td>

                                <td>3431</td>
                                <td>Transporte</td>
                                <td>30-03-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.1</td>
                                <td>18.15</td>
                                <td>0</td>
                                <td>$14.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3431"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3431" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3431"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3431)" value="3431"
                                        href="ordernull.php?id=3431"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3620" id="3620">
                                        <input type="hidden" value="6800" id="valor3620" name="valor3620">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros3620" name="metros3620">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4.40" id="peso3620" name="peso3620">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3620" name="bultos3620">

                                    </div>
                                </td>

                                <td>3620</td>
                                <td>Transporte</td>
                                <td>01-04-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>4.40</td>
                                <td>0</td>
                                <td>$6.800</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3620"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3620" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3620"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3620)" value="3620"
                                        href="ordernull.php?id=3620"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4408" id="4408">
                                        <input type="hidden" value="7000" id="valor4408" name="valor4408">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros4408" name="metros4408">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4.60" id="peso4408" name="peso4408">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4408" name="bultos4408">

                                    </div>
                                </td>

                                <td>4408</td>
                                <td>Transporte</td>
                                <td>12-04-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>4.60</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4408"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4408" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4408"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4408)" value="4408"
                                        href="ordernull.php?id=4408"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4653" id="4653">
                                        <input type="hidden" value="9000" id="valor4653" name="valor4653">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros4653" name="metros4653">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2.00" id="peso4653" name="peso4653">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4653" name="bultos4653">

                                    </div>
                                </td>

                                <td>4653</td>
                                <td>Transporte</td>
                                <td>14-04-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>$9.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4653"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4653" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4653"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4653)" value="4653"
                                        href="ordernull.php?id=4653"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4870" id="4870">
                                        <input type="hidden" value="9800" id="valor4870" name="valor4870">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros4870" name="metros4870">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="7.95" id="peso4870" name="peso4870">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4870" name="bultos4870">

                                    </div>
                                </td>

                                <td>4870</td>
                                <td>Transporte</td>
                                <td>19-04-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>7.95</td>
                                <td>0</td>
                                <td>$9.800</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4870"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4870" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4870"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4870)" value="4870"
                                        href="ordernull.php?id=4870"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4979" id="4979">
                                        <input type="hidden" value="26000" id="valor4979" name="valor4979">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.32" id="metros4979" name="metros4979">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="42.90" id="peso4979" name="peso4979">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos4979" name="bultos4979">

                                    </div>
                                </td>

                                <td>4979</td>
                                <td>Transporte</td>
                                <td>20-04-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>2</td>
                                <td>0.32</td>
                                <td>42.90</td>
                                <td>0</td>
                                <td>$26.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4979"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4979" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4979"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4979)" value="4979"
                                        href="ordernull.php?id=4979"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5623" id="5623">
                                        <input type="hidden" value="8000" id="valor5623" name="valor5623">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros5623" name="metros5623">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.00" id="peso5623" name="peso5623">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5623" name="bultos5623">

                                    </div>
                                </td>

                                <td>5623</td>
                                <td>Transporte</td>
                                <td>27-04-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>1.00</td>
                                <td>0</td>
                                <td>$8.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5623"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5623" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5623"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5623)" value="5623"
                                        href="ordernull.php?id=5623"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6402" id="6402">
                                        <input type="hidden" value="16500" id="valor6402" name="valor6402">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.13" id="metros6402" name="metros6402">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="18.00" id="peso6402" name="peso6402">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6402" name="bultos6402">

                                    </div>
                                </td>

                                <td>6402</td>
                                <td>Transporte</td>
                                <td>05-05-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.13</td>
                                <td>18.00</td>
                                <td>0</td>
                                <td>$16.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6402"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6402" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6402"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6402)" value="6402"
                                        href="ordernull.php?id=6402"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="7094" id="7094">
                                        <input type="hidden" value="16500" id="valor7094" name="valor7094">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros7094" name="metros7094">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="15.20" id="peso7094" name="peso7094">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos7094" name="bultos7094">

                                    </div>
                                </td>

                                <td>7094</td>
                                <td>Transporte</td>
                                <td>16-05-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>2</td>
                                <td>0.12</td>
                                <td>15.20</td>
                                <td>0</td>
                                <td>$16.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=7094"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=7094" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=7094"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(7094)" value="7094"
                                        href="ordernull.php?id=7094"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="13094" id="13094">
                                        <input type="hidden" value="16500" id="valor13094" name="valor13094">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros13094" name="metros13094">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="19.30" id="peso13094" name="peso13094">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos13094" name="bultos13094">

                                    </div>
                                </td>

                                <td>13094</td>
                                <td>Transporte</td>
                                <td>14-09-2022</td>
                                <td>Concepción</td>
                                <td>Cabrero</td>
                                <td>1</td>
                                <td>0.12</td>
                                <td>19.30</td>
                                <td>0</td>
                                <td>$16.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=13094"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=13094" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=13094"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(13094)" value="13094"
                                        href="ordernull.php?id=13094"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3681" id="3681">
                                        <input type="hidden" value="95000" id="valor3681" name="valor3681">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.22" id="metros3681" name="metros3681">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="87.30" id="peso3681" name="peso3681">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="11" id="bultos3681" name="bultos3681">

                                    </div>
                                </td>

                                <td>3681</td>
                                <td>Transporte</td>
                                <td>01-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>11</td>
                                <td>1.22</td>
                                <td>87.30</td>
                                <td>0</td>
                                <td>$95.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3681"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3681" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3681"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3681)" value="3681"
                                        href="ordernull.php?id=3681"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3795" id="3795">
                                        <input type="hidden" value="20000" id="valor3795" name="valor3795">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.06" id="metros3795" name="metros3795">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="21.15" id="peso3795" name="peso3795">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos3795" name="bultos3795">

                                    </div>
                                </td>

                                <td>3795</td>
                                <td>Transporte</td>
                                <td>04-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.06</td>
                                <td>21.15</td>
                                <td>0</td>
                                <td>$20.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3795"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3795" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3795"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3795)" value="3795"
                                        href="ordernull.php?id=3795"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="3959" id="3959">
                                        <input type="hidden" value="12000" id="valor3959" name="valor3959">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros3959" name="metros3959">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="9.30" id="peso3959" name="peso3959">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos3959" name="bultos3959">

                                    </div>
                                </td>

                                <td>3959</td>
                                <td>Transporte</td>
                                <td>06-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>9.30</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=3959"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=3959" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=3959"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(3959)" value="3959"
                                        href="ordernull.php?id=3959"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4028" id="4028">
                                        <input type="hidden" value="30000" id="valor4028" name="valor4028">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.06" id="metros4028" name="metros4028">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="41.30" id="peso4028" name="peso4028">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3" id="bultos4028" name="bultos4028">

                                    </div>
                                </td>

                                <td>4028</td>
                                <td>Transporte</td>
                                <td>06-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>3</td>
                                <td>0.06</td>
                                <td>41.30</td>
                                <td>0</td>
                                <td>$30.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4028"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4028" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4028"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4028)" value="4028"
                                        href="ordernull.php?id=4028"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4059" id="4059">
                                        <input type="hidden" value="8200" id="valor4059" name="valor4059">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros4059" name="metros4059">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.50" id="peso4059" name="peso4059">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4059" name="bultos4059">

                                    </div>
                                </td>

                                <td>4059</td>
                                <td>Transporte</td>
                                <td>07-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>0.50</td>
                                <td>0</td>
                                <td>$8.200</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4059"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4059" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4059"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4059)" value="4059"
                                        href="ordernull.php?id=4059"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4179" id="4179">
                                        <input type="hidden" value="6900" id="valor4179" name="valor4179">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros4179" name="metros4179">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.50" id="peso4179" name="peso4179">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4179" name="bultos4179">

                                    </div>
                                </td>

                                <td>4179</td>
                                <td>Transporte</td>
                                <td>08-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.50</td>
                                <td>0</td>
                                <td>$6.900</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4179"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4179" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4179"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4179)" value="4179"
                                        href="ordernull.php?id=4179"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4263" id="4263">
                                        <input type="hidden" value="27000" id="valor4263" name="valor4263">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros4263" name="metros4263">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="39.00" id="peso4263" name="peso4263">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos4263" name="bultos4263">

                                    </div>
                                </td>

                                <td>4263</td>
                                <td>Transporte</td>
                                <td>08-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.12</td>
                                <td>39.00</td>
                                <td>0</td>
                                <td>$27.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4263"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4263" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4263"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4263)" value="4263"
                                        href="ordernull.php?id=4263"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4384" id="4384">
                                        <input type="hidden" value="12000" id="valor4384" name="valor4384">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.07" id="metros4384" name="metros4384">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="10.00" id="peso4384" name="peso4384">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4384" name="bultos4384">

                                    </div>
                                </td>

                                <td>4384</td>
                                <td>Transporte</td>
                                <td>12-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.07</td>
                                <td>10.00</td>
                                <td>0</td>
                                <td>$12.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4384"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4384" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4384"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4384)" value="4384"
                                        href="ordernull.php?id=4384"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4537" id="4537">
                                        <input type="hidden" value="28000" id="valor4537" name="valor4537">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.13" id="metros4537" name="metros4537">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="20.00" id="peso4537" name="peso4537">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos4537" name="bultos4537">

                                    </div>
                                </td>

                                <td>4537</td>
                                <td>Transporte</td>
                                <td>13-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.13</td>
                                <td>20.00</td>
                                <td>0</td>
                                <td>$28.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4537"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4537" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4537"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4537)" value="4537"
                                        href="ordernull.php?id=4537"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4698" id="4698">
                                        <input type="hidden" value="75900" id="valor4698" name="valor4698">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.62" id="metros4698" name="metros4698">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="86.50" id="peso4698" name="peso4698">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="7" id="bultos4698" name="bultos4698">

                                    </div>
                                </td>

                                <td>4698</td>
                                <td>Transporte</td>
                                <td>14-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>7</td>
                                <td>0.62</td>
                                <td>86.50</td>
                                <td>0</td>
                                <td>$75.900</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4698"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4698" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4698"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4698)" value="4698"
                                        href="ordernull.php?id=4698"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4722" id="4722">
                                        <input type="hidden" value="57000" id="valor4722" name="valor4722">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.54" id="metros4722" name="metros4722">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="57.20" id="peso4722" name="peso4722">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5" id="bultos4722" name="bultos4722">

                                    </div>
                                </td>

                                <td>4722</td>
                                <td>Transporte</td>
                                <td>14-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>5</td>
                                <td>0.54</td>
                                <td>57.20</td>
                                <td>0</td>
                                <td>$57.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4722"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4722" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4722"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4722)" value="4722"
                                        href="ordernull.php?id=4722"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4803" id="4803">
                                        <input type="hidden" value="21000" id="valor4803" name="valor4803">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros4803" name="metros4803">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="16.40" id="peso4803" name="peso4803">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4803" name="bultos4803">

                                    </div>
                                </td>

                                <td>4803</td>
                                <td>Transporte</td>
                                <td>18-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.12</td>
                                <td>16.40</td>
                                <td>0</td>
                                <td>$21.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4803"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4803" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4803"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4803)" value="4803"
                                        href="ordernull.php?id=4803"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="4834" id="4834">
                                        <input type="hidden" value="7000" id="valor4834" name="valor4834">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros4834" name="metros4834">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.20" id="peso4834" name="peso4834">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos4834" name="bultos4834">

                                    </div>
                                </td>

                                <td>4834</td>
                                <td>Transporte</td>
                                <td>19-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.20</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=4834"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=4834" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=4834"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(4834)" value="4834"
                                        href="ordernull.php?id=4834"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5497" id="5497">
                                        <input type="hidden" value="8500" id="valor5497" name="valor5497">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros5497" name="metros5497">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3.50" id="peso5497" name="peso5497">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5497" name="bultos5497">

                                    </div>
                                </td>

                                <td>5497</td>
                                <td>Transporte</td>
                                <td>26-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>3.50</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5497"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5497" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5497"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5497)" value="5497"
                                        href="ordernull.php?id=5497"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5522" id="5522">
                                        <input type="hidden" value="142000" id="valor5522" name="valor5522">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.49" id="metros5522" name="metros5522">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="152.00" id="peso5522" name="peso5522">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="7" id="bultos5522" name="bultos5522">

                                    </div>
                                </td>

                                <td>5522</td>
                                <td>Transporte</td>
                                <td>26-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>7</td>
                                <td>1.49</td>
                                <td>152.00</td>
                                <td>0</td>
                                <td>$142.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5522"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5522" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5522"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5522)" value="5522"
                                        href="ordernull.php?id=5522"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5659" id="5659">
                                        <input type="hidden" value="30000" id="valor5659" name="valor5659">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.29" id="metros5659" name="metros5659">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="64.00" id="peso5659" name="peso5659">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="4" id="bultos5659" name="bultos5659">

                                    </div>
                                </td>

                                <td>5659</td>
                                <td>Transporte</td>
                                <td>27-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>4</td>
                                <td>0.29</td>
                                <td>64.00</td>
                                <td>0</td>
                                <td>$30.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5659"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5659" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5659"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5659)" value="5659"
                                        href="ordernull.php?id=5659"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5737" id="5737">
                                        <input type="hidden" value="7000" id="valor5737" name="valor5737">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros5737" name="metros5737">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.74" id="peso5737" name="peso5737">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5737" name="bultos5737">

                                    </div>
                                </td>

                                <td>5737</td>
                                <td>Transporte</td>
                                <td>28-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>0.74</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5737"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5737" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5737"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5737)" value="5737"
                                        href="ordernull.php?id=5737"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5771" id="5771">
                                        <input type="hidden" value="27000" id="valor5771" name="valor5771">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.12" id="metros5771" name="metros5771">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="21.50" id="peso5771" name="peso5771">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos5771" name="bultos5771">

                                    </div>
                                </td>

                                <td>5771</td>
                                <td>Transporte</td>
                                <td>28-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.12</td>
                                <td>21.50</td>
                                <td>0</td>
                                <td>$27.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5771"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5771" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5771"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5771)" value="5771"
                                        href="ordernull.php?id=5771"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5810" id="5810">
                                        <input type="hidden" value="43000" id="valor5810" name="valor5810">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.22" id="metros5810" name="metros5810">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="26.00" id="peso5810" name="peso5810">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos5810" name="bultos5810">

                                    </div>
                                </td>

                                <td>5810</td>
                                <td>Transporte</td>
                                <td>29-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.22</td>
                                <td>26.00</td>
                                <td>0</td>
                                <td>$43.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5810"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5810" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5810"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5810)" value="5810"
                                        href="ordernull.php?id=5810"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5841" id="5841">
                                        <input type="hidden" value="57000" id="valor5841" name="valor5841">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.45" id="metros5841" name="metros5841">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="70.90" id="peso5841" name="peso5841">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos5841" name="bultos5841">

                                    </div>
                                </td>

                                <td>5841</td>
                                <td>Transporte</td>
                                <td>29-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.45</td>
                                <td>70.90</td>
                                <td>0</td>
                                <td>$57.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5841"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5841" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5841"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5841)" value="5841"
                                        href="ordernull.php?id=5841"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5851" id="5851">
                                        <input type="hidden" value="27000" id="valor5851" name="valor5851">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.15" id="metros5851" name="metros5851">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="35.00" id="peso5851" name="peso5851">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3" id="bultos5851" name="bultos5851">

                                    </div>
                                </td>

                                <td>5851</td>
                                <td>Transporte</td>
                                <td>29-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>3</td>
                                <td>0.15</td>
                                <td>35.00</td>
                                <td>0</td>
                                <td>$27.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5851"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5851" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5851"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5851)" value="5851"
                                        href="ordernull.php?id=5851"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5888" id="5888">
                                        <input type="hidden" value="8000" id="valor5888" name="valor5888">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros5888" name="metros5888">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.00" id="peso5888" name="peso5888">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5888" name="bultos5888">

                                    </div>
                                </td>

                                <td>5888</td>
                                <td>Transporte</td>
                                <td>29-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>1.00</td>
                                <td>0</td>
                                <td>$8.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5888"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5888" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5888"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5888)" value="5888"
                                        href="ordernull.php?id=5888"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5890" id="5890">
                                        <input type="hidden" value="7000" id="valor5890" name="valor5890">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0" id="metros5890" name="metros5890">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.60" id="peso5890" name="peso5890">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5890" name="bultos5890">

                                    </div>
                                </td>

                                <td>5890</td>
                                <td>Transporte</td>
                                <td>29-04-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0.60</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5890"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5890" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5890"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5890)" value="5890"
                                        href="ordernull.php?id=5890"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5935" id="5935">
                                        <input type="hidden" value="9000" id="valor5935" name="valor5935">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.03" id="metros5935" name="metros5935">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="3.10" id="peso5935" name="peso5935">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5935" name="bultos5935">

                                    </div>
                                </td>

                                <td>5935</td>
                                <td>Transporte</td>
                                <td>02-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.03</td>
                                <td>3.10</td>
                                <td>0</td>
                                <td>$9.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5935"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5935" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5935"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5935)" value="5935"
                                        href="ordernull.php?id=5935"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="5981" id="5981">
                                        <input type="hidden" value="7000" id="valor5981" name="valor5981">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros5981" name="metros5981">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.90" id="peso5981" name="peso5981">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos5981" name="bultos5981">

                                    </div>
                                </td>

                                <td>5981</td>
                                <td>Transporte</td>
                                <td>02-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>1.90</td>
                                <td>0</td>
                                <td>$7.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=5981"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=5981" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=5981"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(5981)" value="5981"
                                        href="ordernull.php?id=5981"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6016" id="6016">
                                        <input type="hidden" value="10000" id="valor6016" name="valor6016">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.04" id="metros6016" name="metros6016">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="7.80" id="peso6016" name="peso6016">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6016" name="bultos6016">

                                    </div>
                                </td>

                                <td>6016</td>
                                <td>Transporte</td>
                                <td>02-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.04</td>
                                <td>7.80</td>
                                <td>0</td>
                                <td>$10.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6016"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6016" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6016"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6016)" value="6016"
                                        href="ordernull.php?id=6016"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6038" id="6038">
                                        <input type="hidden" value="11000" id="valor6038" name="valor6038">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros6038" name="metros6038">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.70" id="peso6038" name="peso6038">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6038" name="bultos6038">

                                    </div>
                                </td>

                                <td>6038</td>
                                <td>Transporte</td>
                                <td>03-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>5.70</td>
                                <td>0</td>
                                <td>$11.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6038"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6038" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6038"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6038)" value="6038"
                                        href="ordernull.php?id=6038"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6052" id="6052">
                                        <input type="hidden" value="8500" id="valor6052" name="valor6052">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.01" id="metros6052" name="metros6052">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1.14" id="peso6052" name="peso6052">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6052" name="bultos6052">

                                    </div>
                                </td>

                                <td>6052</td>
                                <td>Transporte</td>
                                <td>03-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.01</td>
                                <td>1.14</td>
                                <td>0</td>
                                <td>$8.500</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6052"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6052" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6052"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6052)" value="6052"
                                        href="ordernull.php?id=6052"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6076" id="6076">
                                        <input type="hidden" value="55000" id="valor6076" name="valor6076">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.54" id="metros6076" name="metros6076">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="40.00" id="peso6076" name="peso6076">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="2" id="bultos6076" name="bultos6076">

                                    </div>
                                </td>

                                <td>6076</td>
                                <td>Transporte</td>
                                <td>03-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>2</td>
                                <td>0.54</td>
                                <td>40.00</td>
                                <td>0</td>
                                <td>$55.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6076"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6076" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6076"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6076)" value="6076"
                                        href="ordernull.php?id=6076"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" onchange="marcar(this)" name="orden[]"
                                            type="checkbox" value="6162" id="6162">
                                        <input type="hidden" value="9000" id="valor6162" name="valor6162">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="0.02" id="metros6162" name="metros6162">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="5.00" id="peso6162" name="peso6162">
                                        <input type="hidden" readonly="" class="form-control-plaintext text-center"
                                            value="1" id="bultos6162" name="bultos6162">

                                    </div>
                                </td>

                                <td>6162</td>
                                <td>Transporte</td>
                                <td>03-05-2022</td>
                                <td>Concepción</td>
                                <td>Los Ángeles</td>
                                <td>1</td>
                                <td>0.02</td>
                                <td>5.00</td>
                                <td>0</td>
                                <td>$9.000</td>
                                <td><a class="btn btn-primary" id="btnImprimir"
                                        href="http://localhost/tpqtimprime/ticket.php?id=6162"><i class="fas fa-print"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-info" href="tagprint.php?id=6162" target="_blank"><i
                                            class="fas fa-print" aria-hidden="true"></i></a>
                                    <a class="btn btn-warning" href="editpqt.php?id=6162"><i class="fas fa-pen"
                                            aria-hidden="true"></i></a>
                                    <a class="btn btn-danger" id="anular" onclick="anular(6162)" value="6162"
                                        href="ordernull.php?id=6162"><i class="fas fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
        include '../layouts/footer.php';
    ?>

</body>