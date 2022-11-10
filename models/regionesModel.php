<?php
    class regionesModel{
        private $PDO;
        public function __construct()
        {
            require_once "../../../config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function show(){
            $stament = $this->PDO->prepare("Call listarRegiones();");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function showOne($id){
            $stament = $this->PDO->prepare("Call listarRegion($id);");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }

?>