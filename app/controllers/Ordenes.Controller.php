<?php
    class OrdenesController{
        private $model;
        public function __construct()
        {
            require_once("models/oficinasModel.php");
            $this->model = new oficinasModel();
        }
        
        public function show(){
            return ($this->model->show()) ? $this->model->show() : false;
        }
        public function NuevaOrden()
		{
            require_once("resources/views/NuevaOrden/show.php");
		}
        public function RevisarOrden()
		{
            require_once("resources/views/RevisarOrden/show.php");
		}
        public function NominarOrden()
		{
            require_once("resources/views/nominar/show.php");
		}
        public function AsignarOrden()
		{
            require_once("resources/views/asignar/show.php");
		}
        public function AsignarConCodigo()
		{
            require_once("resources/views/AsignarCodigo/show.php");
		}
    }

?>