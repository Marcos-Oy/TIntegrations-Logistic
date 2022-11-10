<?php
    class oficinasModel{
        private $PDO;
        private $Solicitud;
        public function __construct()
        {
            require_once "config/db.php";
           // $con = new Conexion();
            //$this->PDO = $con->conexion();
            $this->basededatos=Conexion::conectar();
            $this->Solicitud=array();
        }

       //
       public function show()
       {
           $consulta="call listaroficina()";
           $resultado=$this->basededatos->query($consulta);
           while($fila=$resultado->fetch_assoc()){
               $this->Solicitud[]=$fila;
           }
           return $this->Solicitud;
       }


       
    }

?>