<?php
    class usuariosModel{
        private $PDO;
        public function __construct()
        {
            require_once "../../../config/db.php";
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function index(){
            $stament = $this->PDO->prepare("call mostrarUsusariosActivos()");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function insertar($nombre, $paterno, $materno, $email, $tel1, $tel2, $ofi, $cargo, $fechanac){
            $stament = $this->PDO->prepare("select create_user('$nombre', '$paterno', '$materno', '$email', '$tel1', '$tel2', '$ofi', '$cargo', '$fechanac');");
            // $stament->bindParam($nombre, $paterno,$materno,$email, $tel1, $tel2, $ofi,$cargo,$fechanac);
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        
        public function update($id,$nombre){
            $stament = $this->PDO->prepare("UPDATE username SET nombre = :nombre WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>