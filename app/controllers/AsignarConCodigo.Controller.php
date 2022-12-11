<?php
    class AsignarConCodigoController{
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Carga_Asig()
		{
            include("models/usuariosModel.php");
            $apt= new usuariosModel();
            $rows = $apt->Carga_Asignar();
            require_once("resources/views/AsignarCodigo/show.php");
		}





    }

?>