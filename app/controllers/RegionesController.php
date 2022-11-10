<?php
    class RegionesController{
        private $model;
        public function __construct()
        {
            require_once("../../../models/regionesModel.php");
            $this->model = new regionesModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }

        public function showOne($id){
            return ($this->model->showOne($id)) ? $this->model->showOne($id) : false;
        }
    }

?>