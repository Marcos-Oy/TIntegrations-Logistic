<?php
    class RecibirController{
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Principal()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            $resultado = $obj->Datos_Solicitud();
            require_once("resources/views/recibir/show.php");
		}
		
        public function Crear()
		{
			include("models/oficinasModel.php");
            $ofi = new oficinasModel();
            $rowsOficinas = $ofi->show();
			include("models/cargo_usuariosModel.php");
            $cargos = new cargo_usuariosModel();
            $rowsCargos = $cargos->show();
            require_once("resources/views/users/create.php");
		}
        /*************************CRUD USUARIO**********************/
    }
?>