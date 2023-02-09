<?php
    class AsignarController{
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Carga()
		{
            include("models/usuariosModel.php");
            $apt= new usuariosModel();
            $rows = $apt->Carga_Asignar();
            
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            $obj->setbodega($_SESSION['idbodega']);
            $resultado = $obj->Asignar_Orden_Obtener();
            require_once("resources/views/Asignar/show.php");
		}

        public function Asignar()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            $count = 0;
            if (isset($_POST['asignar'])) {
                if (!empty($_POST['ordenes'])) {                    
                    
                    $checked_contador = count($_POST['ordenes']);
                    foreach ($_POST['ordenes'] as $selected) 
                    {                     
                        $obj->setUsername($_SESSION['username']);
                        $obj->setODT($selected);
                        $obj->setFecha($fecha);
                        $obj->setBodega( $_SESSION['idbodega']);
                        $obj->setRepartidor($_POST['repartidor']);
                        $obj->setIdactividad($_POST['estado']);
                        $resultado = $obj->Asignar_Orden();
                        if($resultado==true)
                        {
                            $count= $count+1;
                        }
                    }
                    if($checked_contador==$count)
                        {
                            echo "<script>alert('Asignación Exitosa');
                            window.location= '?control=Asignar&action=Carga'</script>";
                        }
                        else
                        {
                            echo "<script>alert('La Asignación no ha podido ser procesada');
                            window.location= '?control=Asignar&action=Carga'</script>";
                        }
			
                }
            }
            else if(isset($_POST['devolver'])){
                if (!empty($_POST['ordenes'])) {
                    $checked_contador = count($_POST['ordenes']);
                    foreach ($_POST['ordenes'] as $selected) 
                    {                    
                        $obj->setUsername($_SESSION['username']);
                        $obj->setODT($selected);
                        $obj->setFecha($fecha);
                        $obj->setBodega( $_SESSION['idbodega']);
                        $obj->setRepartidor($_POST['repartidor']);
                        $obj->setIdactividad($_POST['estado']);
                        $resultado = $obj->Devolver_Orden();
                        if($resultado==true)
                        {
                            $count= $count+1;
                        }
                    }
                    if($checked_contador==$count)
                        {
                            echo "<script>alert('Devolución Exitosa');
                            window.location= '?control=Asignar&action=Carga'</script>";
                        }
                        else
                        {
                            echo "<script>alert('La Devolución no ha podido ser procesada');
                            window.location= '?control=Asignar&action=Carga'</script>";
                        }
			
                }
            }
        }
    }

?>