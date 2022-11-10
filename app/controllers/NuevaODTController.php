<?php
    class nuevaODTController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/nuevaODTModel.php");
            $this->model = new nuevaODTModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
        
    }

?>