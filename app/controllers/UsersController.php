<?php
    class UsersController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/usuariosModel.php");
            $this->model = new usuariosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }

        public function guardar($nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac){
            $id = $this->model->insertar(ucfirst($nombre), ucfirst($paterno), ucfirst($materno),$email, $tel1, $tel2, $ofi, $cargo, $fechanac);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function update($id, $nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac){
            return ($this->model->update($id,$nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
    }

?>