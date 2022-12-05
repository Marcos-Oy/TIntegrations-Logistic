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
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            $count = 0;
            if (isset($_POST['entrega'])) {
                if (!empty($_POST['ordenes'])) {
                    $checked_contador = count($_POST['ordenes']);
                    //echo $checked_contador."<br>";

                    foreach ($_POST['ordenes'] as $selected) 
                    {
                        //echo $selected."<br>";
                        //IN _numero bigint(25), IN _fecha text, IN _username text, IN _idbodega int
                        
                        $obj->setUsername('ALEDAV');
                        $obj->setODT($selected);
                        $obj->setFecha($fecha);
                        $obj->setBodega(3);
                        
                        $resultado = $obj->Recibir_Orden();
                        if($resultado==true)
                        {
                            $count= $count+1;
                            
                        }
                    }
                    if($checked_contador==$count)
                        {
                            echo "<script>alert('Ingreso Exitoso');
                            window.location= '?control=Recibir&action=Principal'</script>";
                        }
                        else
                        {
                            echo "<script>alert('Ingreso No Exitoso');
                            window.location= '?control=Recibir&action=Principal'</script>";
                        }
			
                }
            }
        }
        /*************************CRUD USUARIO**********************/
    }
?>