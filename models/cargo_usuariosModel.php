<?php
    class cargo_usuariosModel{
        private $PDO;
        public function __construct()
        {
            require_once "config/db.php";
           // $con = new Conexion();
            //$this->PDO = $con->conexion();
            $this->basededatos=Conexion::conectar();
        }

       //
       public function show()
       {
           $consulta="call Cargos_obtener(null)";
           $resultado=$this->basededatos->query($consulta);
           while($fila=$resultado->fetch_assoc()){
               $this->Solicitud[]=$fila;
           }
           return $this->Solicitud;
       }

        
    }

?>