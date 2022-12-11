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
        public function Asignar_Codigo()
		{
            include("models/OrdenesModel.php");
            $obj = new OrdenesModel();
            date_default_timezone_set("America/Santiago");
            $fecha = date("Y-m-d H:i:s");
            $count = 0;
            if (isset($_POST['entrega'])) {
                if (!empty($_POST['orden'])) {
                    $checked_contador = count($_POST['orden']);
                    foreach ($_POST['orden'] as $selected) 
                    {                    
                        $obj->setUsername($_SESSION['username']);
                        $obj->setODT($selected);
                        $obj->setFecha($fecha);
                        $obj->setBodega( $_SESSION['idbodega']);
                        $obj->setRepartidor($_POST['repartidor']);
                        $obj->setIdactividad($_POST['estado']);
                        $resultado = $obj->AsignarCon_Codigo();
                        if($resultado==true)
                        {
                            $count= $count+1;
                        }
                    }
                    if($count>0)
                    {
                        echo "<script>alert('Asignación Exitosa');
                        window.location= '?control=AsignarConCodigo&action=Carga_Asig'</script>";
                    }
                    else
                    {
                        echo "<script>alert('La Asignación no ha podido ser procesada');
                        window.location= '?control=AsignarConCodigo&action=Carga_Asig'</script>";
                    }

                }
            }
        }


        





    }

?>