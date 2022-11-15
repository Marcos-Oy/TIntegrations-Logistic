<?php
    class oficinasModel{
        private $PDO;
        private $Solicitud;
        private $idoffice;
        
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
           $consulta="call oficinas_obtener(null)";
           $resultado=$this->basededatos->query($consulta);
           while($fila=$resultado->fetch_assoc()){
               $this->Solicitud[]=$fila;
           }
           return $this->Solicitud;
       }

        public function showById()
       {
           $consulta="call oficinas_obtener($this->idoffice)";
           $resultado=$this->basededatos->query($consulta);
           while($fila=$resultado->fetch_assoc()){
               $this->Solicitud[]=$fila;
           }
           return $this->Solicitud;
       }

       

        public function getIdoffice(){ return $this->idoffice; }
        public function setIdoffice($idoffice): self { $this->idoffice = $idoffice; return $this; }
    }

?>