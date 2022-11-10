<?php
    class comunasModel{
        private $PDO;
        public function __construct()
        {
            require_once "../../../config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function show($id){
            $stament = $this->PDO->prepare("Call listarComunas($id)");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function showOne($id){
            $stament = $this->PDO->prepare("Call listarComuna($id)");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }

?>