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
           $consulta="select * from oficinas";
           $resultado=$this->basededatos->query($consulta);
           while($fila=$resultado->fetch_assoc()){
               $this->Solicitud[]=$fila;
           }
           return $this->Solicitud;
       }


       
    }

?>