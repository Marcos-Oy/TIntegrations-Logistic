<?php
    class UsersController{
        private $model;



        public function __construct()
        {
            require_once("../../../models/usuariosModel.php");
            include "resources/views/users/show.php";
            guardar($_POST['nombre'],
            $_POST['paterno'],
            $_POST['materno'],
            $_POST['email'],
            $_POST['tel1'],
            $_POST['tel2'],
            $_POST['ofi'],
            $_POST['cargo'],
            $_POST['fechanac']);
            include "resources/views/users/show.php";
            $this->model = new usuariosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }

        public function guardar($nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac){
            $id = $this->model->insertar(ucfirst($nombre), ucfirst($paterno), ucfirst($materno),$email, $tel1, $tel2, $ofi, $cargo, $fechanac);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
    }

?>