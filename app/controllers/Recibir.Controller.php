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
		
        public function Recibir()
		{
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            if (isset($_POST['entrega'])) {
                if (!empty($_POST['ordenes'])) {
                    $checked_contador = count($_POST['ordenes']);
                    //echo $checked_contador."<br>";
                    foreach ($_POST['ordenes'] as $selected) 
                    {
                        //echo $selected."<br>";
                        //IN _numero bigint(25), IN _fecha text, IN _username text, IN _idbodega int
                        
                    }
			
                }
            }
        }
        /*************************CRUD USUARIO**********************/
    }
?>