<?php
    class NominarController{

        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Nominate()
		{
            $rows = "";
            include("models/regionesModel.php");
            $apt= new regionesModel();
            $rowsRegiones = $apt->show();

            include("models/oficinasModel.php");
            $apt= new oficinasModel();
            $rowsOficinas = $apt->show();

            include("models/usuariosModel.php");
            $apt= new usuariosModel();
            $rowsUsers = $apt->get_Solicitud();

            require_once("resources/views/nominar/show.php");
		}
        
        public function comunas_obtener(){
            include("models/comunasModel.php");
            $apt= new comunasModel();
            $id = $apt->show();
        }
        
        public function Filtrar_Nominar(){

            include("models/regionesModel.php");
            $apt= new regionesModel();
            $rowsRegiones = $apt->show();

            include("models/oficinasModel.php");
            $apt= new oficinasModel();
            $rowsOficinas = $apt->show();

            include("models/usuariosModel.php");
            $apt= new usuariosModel();
            $rowsUsers = $apt->get_Solicitud();

            include("models/nominarModel.php");
            $apt= new nominarModel();
			$apt->setidoficina($_POST['idoficina']);
			$apt->setestorden($_POST['estorden']);
			$apt->setcomuna($_POST['comuna']);
			$apt->setfechacreaciondesde($_POST['fechacreaciondesde']);
			$apt->setfechacreacionhasta($_POST['fechacreacionhasta']);
			$apt->setfechaactividaddesde($_POST['fechaactividaddesde']);
			$apt->setfechaactividadhasta($_POST['fechaactividadhasta']);
			$apt->setrepartidor($_POST['repartidor']);
            $rows = $apt->filtrar_nomninar();
            
            if(isset($rows) && !empty($rows))
			{
				require_once("resources/views/Nominar/show.php");
			}
			else
			{
				// echo "<script>alert('No Exitoso');
				// window.location= '?control=Nominar&action=Nominate'</script>";
			}
        }
    }
?>