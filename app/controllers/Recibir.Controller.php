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
        public function Secundario()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            $resultado = $obj->Datos_Devolver();
            require_once("resources/views/RecibirDevolucion/show.php");
		}
		
        public function Recibir()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            $count = 0;
            if (isset($_POST['entrega'])) {
                if (!empty($_POST['ordenes'])) {
                    $checked_contador = count($_POST['ordenes']);
                    foreach ($_POST['ordenes'] as $selected) 
                    {                        
                        $obj->setUsername($_SESSION['username']);
                        $obj->setODT($selected);
                        $obj->setFecha($fecha);
                        $obj->setBodega( $_SESSION['idbodega']);
                        $resultado = $obj->Recibir_Orden();
                        echo $resultado;
                        if($resultado==true)
                        {
                            $count= $count+1;
                        }
                    }
                    if($checked_contador==$count)
                        {
                            echo "<script>alert('Recepción Exitosa');
                            window.location= '?control=Recibir&action=Principal'</script>";
                        }
                        else
                        {
                            echo "<script>alert('La Recepción no ha podido ser procesada');
                            window.location= '?control=Recibir&action=Principal'</script>";
                        }
			
                }
            }
        }

        public function Devolver()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            $count = 0;
            if (isset($_POST['entrega'])) {
                if (!empty($_POST['ordenes'])) {
                    $checked_contador = count($_POST['ordenes']);
                    foreach ($_POST['ordenes'] as $selected) 
                    {                        
                        $obj->setUsername($_SESSION['username']);
                        $obj->setODT($selected);
                        $obj->setFecha($fecha);
                        $obj->setBodega( $_SESSION['idbodega']);
                        $resultado = $obj->Recibir_Orden();
                        if($resultado==true)
                        {
                            $count= $count+1;
                        }
                    }
                    if($checked_contador==$count)
                        {
                            echo "<script>alert('Recepción Exitosa');
                            window.location= '?control=Recibir&action=Secundario'</script>";
                        }
                        else
                        {
                            echo "<script>alert('La Recepción no ha podido ser procesada');
                            window.location= '?control=Recibir&action=Secundario'</script>";
                        }
			
                }
            }
        }
        /*************************CRUD USUARIO**********************/
    }
?>