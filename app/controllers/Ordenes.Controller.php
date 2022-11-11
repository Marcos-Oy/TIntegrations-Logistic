<?php

    class OrdenesController{
        public function __construct(){}

    /**************************LLAMADA A LAS VISTAS*************************************** */
    public function NuevaOrden()
    {
        include 'models/regionesModel.php';
        $regionesM = new regionesModel();
        $regiones = $regionesM->show();
        require_once("resources/views/NuevaOrden/show.php");
    }
    public function RevisarOrden()
    {
        require_once("resources/views/RevisarOrden/show.php");
    }
    public function NominarOrden()
    {
        require_once("resources/views/nominar/show.php");
    }
    public function AsignarOrden()
    {
        require_once("resources/views/asignar/show.php");
    }
    public function AsignarConCodigo()
    {
        require_once("resources/views/AsignarCodigo/show.php");
    }
    public function RecibirOrden()
    {
        require_once("resources/views/recibir/show.php");
    }
    public function RecibirOdtExterna()
    {
        require_once("resources/views/CargarODTexterna/show.php");
    }
    public function DevolverOrden()
    {
        require_once("resources/views/devolver/show.php");
    }
    public function EntregarOrden()
    {
        require_once("resources/views/entregar/show.php");
    }

    /**********************************METODOS CRUD Y OTROS*****************************************************/

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
        if (isset($valorf) && !empty($valorf)) {
            $valorflete = $valorf[0];
        }

        include 'models/regionesModel.php';
        $region = new regionesModel();
        $region->setRegid($reg);
        $regfin = $region->showById();
        if (isset($regfin) && !empty($regfin)) {
            $descregion = $regfin[0];
        }

        include 'models/comunasModel.php';
        $comuna = new comunasModel();
        $comuna->setComid($com);
        $comfin = $comuna->showByID();
        if (isset($comfin) && !empty($comfin)) {
            $desccomuna = $comfin;
        }

        include 'models/tipo_pagosModel.php';
        $tipopagos = new tipoPagosModel();
        $tipopago = $tipopagos->show();

        include 'models/tipo_documentoModel.php';
        $tipodocumentos = new tipoDocumentoModel();
        $tipodocumento = $tipodocumentos->show();
    }
}

?>