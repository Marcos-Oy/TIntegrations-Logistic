<?php
    class cargo_usuariosModel{
        private $PDO;
        public function __construct()
        {
            require_once "config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function show(){
            $stament = $this->PDO->prepare("call listarCargos();");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }

?>