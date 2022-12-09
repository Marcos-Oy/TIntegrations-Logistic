<?php
    class EntregarController{
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function CargoD()
		{
            include("models/odt_activModel.php");
            $obj = new Odt_Actividad();
            $rows = $obj->Datos_Entregar();
            require_once("resources/views/entregar/show.php");
		}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Entrega()
		{
            include("models/odt_activModel.php");
            $obj = new Odt_Actividad();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            $count = 0;
            if (isset($_POST['entrega'])) 
            {
                $obj->setODT($_POST['ODT']);
                $cuenta = $obj->Conteo();
                while ($q = mysqli_fetch_array($cuenta)) {
                    $contador = $q['q'];
                }
                echo $contador;

                /*$obj->setUsername($_SESSION['username']);
                $obj->setODT($_POST['ODT']);
                $obj->setRut($_POST['rut']);
                $obj->setNombre($_POST['nombre']);
                $obj->setImagen($_POST['imagen']);
                $obj->setObservaciones($_POST['obse']);
                $obj->setFecha($fecha);
                $obj->setBodega( $_SESSION['idbodega']);
                $resultado = $obj->Recibir_Orden();
                if($resultado==true)
                {
                    $count= $count+1;
                }*/
            }
           /* if($checked_contador==$count)
            {
                echo "<script>alert('Recepción Exitosa');
                window.location= '?control=Recibir&action=Principal'</script>";
            }
            else
            {
                echo "<script>alert('La Recepción no ha podido ser procesada');
                window.location= '?control=Recibir&action=Principal'</script>";
            }*/
			
              
        }





    }

?>