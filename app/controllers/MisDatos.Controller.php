<?php
    class MisDatosController{
        public function MisDatos()
		{
			include("models/usuariosModel.php");
            $apt= new usuariosModel();

			include("models/oficinasModel.php");
            $ofi = new oficinasModel();
            $rowsOficinas = $ofi->show();

			$apt->setusername($_SESSION['username']);
			$resultado=$apt->ShowById();

            require_once("resources/views/MisDatos/show.php");
		}

        public function EditarMisDatos(){
            
            include("models/usuariosModel.php");
            $apt= new usuariosModel();
			$apt->setnombre(ucwords(strtolower($_POST['nombre'])));
			$apt->setpaterno(ucwords(strtolower($_POST['paterno'])));
			$apt->setmaterno(ucwords(strtolower($_POST['materno'])));
			$apt->setemail($_POST['email']);
			$apt->settel1($_POST['tel1']);
			$apt->settel2($_POST['tel2']);
			// $apt->setofi($_POST['ofi']);
			// $apt->setcargo($_POST['cargo']);
			$apt->setfechanac($_POST['fechanac']);
			$apt->setusername($_POST['username']);
			$apt->setestduser_id($_POST['activo']);
            $id = $apt->EditarUsuario();
            if($id==true)
			{
				echo "<script>alert('Ingreso Exitoso');
				window.location= '?control=Users&action=Portal'</script>";
			}
			else
			{
				//echo "<script>alert('No Exitoso');
				//window.location= '?control=Users&action=Portal'</script>";
			}
				
		}
    }

        
?>