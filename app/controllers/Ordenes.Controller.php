<?php
    class OrdenesController{
        private $model;
        public function __construct()
        {
        }
        public function CrearOrden()
		{
            require_once("resources/views/NuevaOrden/show.php");
		}
    }

?>