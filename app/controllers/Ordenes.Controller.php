<?php

    class OrdenesController{
        public function __construct(){}
        
    /**************************LLAMADA A LAS VISTAS*************************************** */
    public function NuevaOrden()
    {
        include 'models/regionesModel.php';
        $regionesM = new regionesModel();
        $listaRegiones = $regionesM->show();

        include 'models/comunasModel.php';
		$comunas = new comunasModel();
		$listaComunas = $comunas->show();

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

    
}

?>