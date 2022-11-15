<?php
    class UsersController{
        
        public function __construct(){}
        //***************************** */ LLAMADA A LAS VISTAS*********************************/
        public function Portal()
		{
            include("models/usuariosModel.php");
            $obj = new UsersController();
            $apt= new usuariosModel();
            $rows = $apt->get_Solicitud();
            require_once("resources/views/users/show.php");
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
        public function Eliminarusuario(){
            
            include("models/usuariosModel.php");
            $obj = new UsersController();
            $apt= new usuariosModel();
           
			if ((isset($_POST['username'])) && ($_POST['username'] != ''))
			{
				$apt->setusername($_POST['username']);
				$id=$apt->EliminarUsuario();
				if($id==true)
				{
					echo "<script>alert('Ingreso Exitoso');
				    window.location= '?control=Users&action=Portal'</script>";
				}
				else
				{
					echo "<script>alert('No Exitoso');
				    window.location= '?control=Users&action=Portal'</script>";
				}
			}	
		}
        public function Crearusuario(){
            
            include("models/usuariosModel.php");
            $obj = new UsersController();
            $apt= new usuariosModel();
			$apt->setnombre(ucwords(strtolower($_POST['nombre'])));
			$apt->setpaterno(ucwords(strtolower($_POST['paterno'])));
			$apt->setmaterno(ucwords(strtolower($_POST['materno'])));
			$apt->setemail($_POST['email']);
			$apt->settel1($_POST['tel1']);
			$apt->settel2($_POST['tel2']);
			$apt->setofi($_POST['ofi']);
			$apt->setcargo($_POST['cargo']);
			$apt->setfechanac($_POST['fechanac']);
            $id = $apt->InsertarUsuario();
            if(isset($id) && !empty($id))
			{
				echo "<script>alert('Ingreso correcto');
				window.location= '?control=Users&action=Portal'</script>";
			}
			else
			{
				echo "<script>alert('No Exitoso');
				window.location= '?control=Users&action=Portal'</script>";
			}
				
		}
    }
?>