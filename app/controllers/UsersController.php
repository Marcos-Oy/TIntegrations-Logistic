<?php
    class UsersController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/UsersModel.php");
            $this->model = new usuariosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
    }

?>