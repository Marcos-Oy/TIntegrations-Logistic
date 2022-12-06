<?php

class NuevaOrdenController
{

    public function datosODT()
    {
        $com = $_POST['comunas'];
        $tipod = $_POST['tipodoc'];
        $tipopag = $_POST['tipopag'];
        $docnum = $_POST['docnum'];
        $valordec = $_POST['valordec'];
        $valorf = $_POST['valorf'];
        $rutrmtt = $_POST['rmttrut'];
        $rutdtno = $_POST['dtnorut'];
        $dirdtno = $_POST['dirdtno'];
        $nmrodtno = $_POST['nmrodtno'];
        $numeraldtno = $_POST['numeraldtno'];
        $refdtno = $_POST['refdtno'];
        $dimensiones = $_POST['dimensiones'];
        $alto = $_POST['alto'];
        $peso = $_POST['peso'];
        $largo = $_POST['largo'];
        $ancho = $_POST['ancho'];
        $cantidad = $_POST['cantidad'];
        $qsobres = $_POST['qsobres'];


        include 'models/comunasModel.php';
        $comuna = new comunasModel();
        $comuna->setComid($com);
        $comfin = $comuna->showByID();
        if (isset($comfin) && !empty($comfin)) {
            foreach ($comfin as $row) {
                $desccomuna = $row['nombrecomuna'];
                $idcomuna = $row['idcomuna'];
                $descregion = $row['nombreregion'];
                $idregion = $row['idregion'];
            }
        }
        $comunas = new comunasModel();
        $listaComunas = $comunas->show();

        include 'models/regionesModel.php';
        $regiones = new regionesModel();
        $listaRegiones = $regiones->show();

        include 'models/tipo_pagosModel.php';
        $tipopagos = new tipoPagosModel();
        $tipopago = $tipopagos->show();
        $tpago = new tipoPagosModel();
        $tpago->setId($tipopag);
        $pago = $tpago->showById();
        if (isset($pago) && !empty($pago)) {
            foreach ($pago as $row) {
                $desctipopago = $row['nombre'];
            }
        }

        include 'models/tipo_documentoModel.php';
        $tipodocumentos = new tipoDocumentoModel();
        $tipodocumento = $tipodocumentos->show();
        $tdocumento = new tipoDocumentoModel();
        $tdocumento->setId($tipod);
        $documento = $tdocumento->showById();
        if (isset($documento) && !empty($documento)) {
            foreach ($documento as $row) {
                $descdocumento = $row['nombre'];
            }
        }

        include 'models/remitenteModel.php';
        $remitentes = new remitentesModel();
        $remitentes->setRut($rutrmtt);
        $remitente = $remitentes->ShowById();
        if(isset($remitente)&&!empty($remitente)){
            foreach ($remitente as $row){
                $rutremitente = $row['rut'];
                $nomremitente = $row['nombre'];
                $fo1remitente = $row['fono1'];
                $fo2remitente = $row['fono2'];
            }
        }

        include 'models/destinatarioModel.php';
        $destinatarios = new destinatariosModel();
        $destinatarios->setRutdtno($rutdtno);
        $destinatario = $destinatarios->showByRut();
        if(isset($destinatario)&&!empty($destinatario)){
            foreach ($destinatario as $row){
                $rutdestinatario = $row['rut'];
                $nomdestinatario = $row['nombre'];
                $fo1destinatario = $row['fono1'];
                $fo2destinatario = $row['fono2'];
            }
        }

        require_once("resources/views/NuevaOrden/show.php");
    }


    public function calcularFlete()
    {

        $reg = $_POST['regiones'];
        $com = $_POST['comunas'];
        $alto = $_POST['alto'];
        $largo = $_POST['largo'];
        $ancho = $_POST['ancho'];
        if (isset($_POST['cantidad']) && !empty($_POST['cantidad']) && $_POST['cantidad'] > 0) {
            $cantidad = $_POST['cantidad'];
            $peso = str_replace(',', '.', $_POST['peso']);
            $dimensiones = $alto * $ancho * $largo / 1000000;
            $pesosize = $alto * $ancho * $largo * 2.5 / 10000;
            if ($peso <= $pesosize) {
                $pesofinal = $pesosize;
            } else {
                $pesofinal = $peso;
            }
        } else {
            $pesofinal = 0;
            $cantidad = 0;
            $alto = 0;
            $ancho = 0;
            $largo = 0;
            $peso = 0;
        }
        if (isset($_POST['qsobres']) && !empty($_POST['qsobres']) && $_POST['qsobres'] > 0) {
            $qsobres = $_POST['qsobres'];
        } else {
            $qsobres = 0;
        }

        include 'models/regionesModel.php';
        $regiones = new regionesModel();
        $listaRegiones = $regiones->show();


        include 'models/tarifaModel.php';
        $tarifa = new tarifaModel();
        $tarifa->setComuna($com);
        $tarifa->setPeso($pesofinal);
        $tarifa->setSobres($qsobres);
        $valorf = $tarifa->calcularTarifa();

        include 'models/comunasModel.php';
        $comuna = new comunasModel();
        $comuna->setComid($com);
        $comfin = $comuna->showByID();
        if (isset($comfin) && !empty($comfin)) {
            foreach ($comfin as $row) {
                $desccomuna = $row['nombrecomuna'];
                $idcomuna = $row['idcomuna'];
                $descregion = $row['nombreregion'];
                $idregion = $row['idregion'];
            }
        }
        $comunas = new comunasModel();
        $comunas->setRegid($reg);
        $listaComunas = $comunas->showByReg();

        include 'models/tipo_pagosModel.php';
        $tipopagos = new tipoPagosModel();
        $tipopago = $tipopagos->show();

        include 'models/tipo_documentoModel.php';
        $tipodocumentos = new tipoDocumentoModel();
        $tipodocumento = $tipodocumentos->show();


        if ($valorf) :

            require_once("resources/views/NuevaOrden/show.php");

        endif;
    }
}
