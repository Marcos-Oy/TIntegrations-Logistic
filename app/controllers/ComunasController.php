<?php
    class comunasController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/comunasModel.php");
            $this->model = new comunasModel();
        }
        
        public function show($id){
            return ($this->model->show($id)) ? $this->model->show($id) : false;
        }

        public function showOne($id){
            return ($this->model->showOne($id)) ? $this->model->showOne($id) : false;
        }

        
    }

?>