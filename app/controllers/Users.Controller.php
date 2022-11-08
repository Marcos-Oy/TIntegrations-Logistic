<?php
    class UsersController{
        
        private $model;
        
        public function __construct()
        {
            require_once("models/usuariosModel.php");
            $this->model = new usuariosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
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
        public function Portal()
		{
            $obj = new UsersController();
            $rows = $obj->show();
            require_once("resources/views/users/show.php");
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
				echo "<script>alert('Ingreso Exitoso');
				window.location= '?control=Users&action=Portal'</script>";
            }
        }
    }

?>