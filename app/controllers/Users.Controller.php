<?php
    class UsersController{
        
        private $model;
        
        public function __construct()
        {
            //require_once("models/usuariosModel.php");
            //$this->model = new usuariosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
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
			include ("Oficinas.Controller.php");
            include ("Cargos.Controller.php");
            $oficina = new OficinasController();
            $rowsOficinas = $oficina->show();
            $cargos = new CargosController();
            $rowsCargos = $cargos->show();
            require_once("resources/views/users/create.php");
		}
        
        
        

        public function guardar(){
            if(isset($_POST['nombre']))
            {           
                $id = $this->model->insertar(ucwords(strtolower($_POST['nombre'])), ucwords(strtolower($_POST['paterno'])),
                ucwords(strtolower($_POST['materno'])), $_POST['email'],
                $_POST['tel1'],
                $_POST['tel2'],
                $_POST['ofi'],
                $_POST['cargo'],
                $_POST['fechanac']);
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
    }

?>