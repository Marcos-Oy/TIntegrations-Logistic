<?php
    class usuariosModel{
        private $PDO;
        public function __construct()
        {
            require_once "config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function show()
        {
            $stament = $this->PDO->prepare("call mostrarUsuariosActivos()");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function insertar($nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac){
            $stament = $this->PDO->prepare("select create_user('$nombre', '$paterno', '$materno', '$email', '$tel1', '$tel2', '$ofi', '$cargo', '$fechanac');");
            // $stament->bindParam($nombre, $paterno,$materno,$email, $tel1, $tel2, $ofi,$cargo,$fechanac);
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }
    }

?>