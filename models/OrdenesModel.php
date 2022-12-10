<?php
    class OrdenesModel
    {
        private $search ="";
        private $ODT;
        private $username;
        private $repartidor;
        private $fecha;
        private $bodega;
        private $idactividad;

        /************METODOS GET AND SET*************/
        public function getODT()
        {
            return $this->ODT;
        }
        public function setODT($ODT): self
        {
            $this->ODT = $ODT;
            return $this;
        }
        public function getUsername()
        {
            return $this->username;
        }

        public function setUsername($username): self
        {
            $this->username = $username;
            return $this;
        }
        public function getRepartidor()
        {
            return $this->repartidor;
        }

        public function setRepartidor($repartidor): self
        {
            $this->repartidor = $repartidor;
            return $this;
        }
        
        public function getFecha()
        {
            return $this->fecha;
        }
        public function setFecha($fecha): self
        {
            $this->fecha = $fecha;
            return $this;
        }

        public function getBodega()
        {
            return $this->bodega;
        }

        public function setBodega($bodega): self
        {
            $this->bodega = $bodega;

            return $this;
        }
        public function getIdactividad()
        {
                return $this->idactividad;
        }

        public function setIdactividad($idactividad)
        {
                $this->idactividad = $idactividad;

                return $this;
        }
    

        public function __construct()
        {
            require_once "config/db.php";
            $this->basededatos=Conexion::conectar();
        }
        // 

        /****METODO CRGA INICIAL PAGINA RECIBIRORDEN*****/
        public function Datos_Solicitud()
		{
			$consulta="call Cargar_Recibir()";
			$resultado=$this->basededatos->query($consulta);
			return $resultado;
		}
        public function Datos_Devolver()
		{
			$consulta="call Cargar_Devolver()";
			$resultado=$this->basededatos->query($consulta);
			return $resultado;
		}
        
		/********************************* */
        public function Recibir_Orden()
		{
			$consulta="call Orden_Recibir(".$this->ODT.", '".$this->fecha."', '".$this->username."',".$this->bodega.")";
			$resultado=$this->basededatos->query($consulta);
			if($resultado==true)
			{
			return true;
			}
			else
			{
				return false;
			}
		}
		/********************************* */
        public function Asignar_Orden_Obtener()
		{
			$consulta="call asignar_orden_obtener()";			
			$resultado=$this->basededatos->query($consulta);
			return $resultado;
		}
        public function Asignar_Orden()
		{
			$consulta="call orden_asignar(".$this->ODT.", '".$this->fecha."', '".$this->username."',".$this->bodega.",'".$this->repartidor."',".$this->idactividad.")";
            $resultado=$this->basededatos->query($consulta);
			if($resultado==true)
			{
			return true;
			}
			else
			{
				return false;
			}
		}
        public function Devolver_Orden()
		{
			$consulta="call orden_devolver_oficina(".$this->ODT.", '".$this->fecha."', '".$this->username."',".$this->bodega.",'".$this->repartidor."',".$this->idactividad.")";
            $resultado=$this->basededatos->query($consulta);
			if($resultado==true)
			{
			return true;
			}
			else
			{
				return false;
			}
		}
        
        


       

       

        
    }   

?>