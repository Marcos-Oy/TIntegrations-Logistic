<?php
    class CargosController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/cargo_usuariosModel.php");
            $this->model = new cargo_usuariosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
    }

?>