<?php
    class tipoPagoController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/tipo_pagosModel.php");
            $this->model = new tipo_pagosModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
        
    }

?>