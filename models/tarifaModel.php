<?php
    class tarifaModel{
        private $PDO;
        public function __construct()
        {
            require_once "../../../config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function show($peso,$sobre,$comuna){
            $stament = $this->PDO->prepare("Select calcularFlete($peso,$sobre,$comuna)");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

    }

?>