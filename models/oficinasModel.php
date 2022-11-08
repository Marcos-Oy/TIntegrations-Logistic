<?php
    class oficinasModel{
        private $PDO;
        public function __construct()
        {
            require_once "../../../config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function show(){
            $stament = $this->PDO->prepare("Call listarOficina();");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }

?>