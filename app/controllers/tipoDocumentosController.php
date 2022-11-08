<?php
    class TipoDocumentosController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/TipoDocumentosModel.php");
            $this->model = new TipoDocumentossModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
    }

?>