<?php
    class NominarController{

        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Nominate()
		{
            require_once("resources/views/nominar/show.php");
		}

        public function oficinas_obtener(){
            include("models/oficinasModel.php");
            $apt= new oficinasModel();
            $id = $apt->show();

            if(isset($id) && !empty($id))
			{
				echo "<script>alert('Ingreso correcto');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
			else
			{
				echo "<script>alert('No Exitoso');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
        }

        public function estado_orden_obtener(){

        }

        public function regiones_obtener(){
            include("models/regionesModel.php");
            $apt= new regionesModel();
            $id = $apt->show();

            if(isset($id) && !empty($id))
			{
				echo "<script>alert('Ingreso correcto');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
			else
			{
				echo "<script>alert('No Exitoso');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
        }
        
        public function comunas_obtener(){
            include("models/comunasModel.php");
            $apt= new comunasModel();
            $id = $apt->show();

            if(isset($id) && !empty($id))
			{
				echo "<script>alert('Ingreso correcto');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
			else
			{
				echo "<script>alert('No Exitoso');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
        }
        
        public function Filtrar_Nominar(){

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
            $id = $apt->filtrar_nomninar();
            if(isset($id) && !empty($id))
			{
				echo "<script>alert('Ingreso correcto');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
			else
			{
				echo "<script>alert('No Exitoso');
				window.location= '?control=Nominar&action=Nominate'</script>";
			}
        }
    }
?>