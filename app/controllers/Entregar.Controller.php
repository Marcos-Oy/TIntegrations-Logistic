<?php
    class EntregarController{
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function CargoD()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            $rows = $obj->Datos_Entregar();
            require_once("resources/views/entregar/show.php");
		}





    }

?>