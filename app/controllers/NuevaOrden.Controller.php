<?php

class NuevaOrdenController
{



    public function mostrarComunas()
    {
        include 'models/comunasModel.php';
        $lc = new comunasModel();
        $idregion = $_POST['id'];
        $lc->setRegid($idregion);
        $consulta = $lc->showByReg();
    }

    public function cambioRegion()
    {
        $reg = $_POST['id'];
        include 'models/comunasModel.php';
        $comuna = new comunasModel();
        $comuna->setRegid($reg);
        $comunas = $comuna->showByReg();
        if (isset($comunas) && !empty($comunas)) {
            $listaComunas = $comunas;
            require_once("resources/views/NuevaOrden/show.php");
        }
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

        include 'models/tarifaModel.php';
        $tarifa = new tarifaModel();
        $tarifa->setComuna($com);
        $tarifa->setPeso($pesofinal);
        $tarifa->setSobres($qsobres);
        $valorf = $tarifa->calcularTarifa();

        include 'models/regionesModel.php';
        $region = new regionesModel();
        $region->setRegid($reg);
        $regfin = $region->showById();
        if (isset($regfin) && !empty($regfin)) {
            foreach ($regfin as $row) {
                $descregion = $row['nombre'];
                $idregion = $row['idregion'];
            }
        }
        $regionesM = new regionesModel();
        $listaRegiones = $regionesM->show();


        include 'models/comunasModel.php';
        $comuna = new comunasModel();
        $comuna->setComid($com);
        $comfin = $comuna->showByID();
        if (isset($comfin) && !empty($comfin)) {
            foreach ($comfin as $row) {
                $desccomuna = $row['nombre'];
                $idcomuna = $row['idcomuna'];
            }
        }

        $comunas = new comunasModel();
        $listaComunas = $comunas->show();

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
