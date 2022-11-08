<?php
    class tarifaController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/tarifaModel.php");
            $this->model = new tarifaModel();
        }
        
        public function show($peso,$sobre,$comuna){
            return ($this->model->show($peso,$sobre,$comuna)) ? $this->model->show($peso,$sobre,$comuna) : false;
        }

        
    }

?>