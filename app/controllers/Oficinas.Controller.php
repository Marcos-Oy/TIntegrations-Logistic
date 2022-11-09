<?php
    class OficinasController{
        private $model;
        public function __construct()
        {
            require_once("models/oficinasModel.php");
            $this->model = new oficinasModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
    }

?>