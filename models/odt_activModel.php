<?php
    class Odt_Actividad
    {
        private $ODT;
        private $username;
        private $fecha;
        private $bodega;
        private $rut,$nombre,$imagen,$observaciones;

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

        public function getRut()
        {
                return $this->rut;
        }

        public function setRut($rut): self
        {
                $this->rut = $rut;
                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre): self
        {
                $this->nombre = $nombre;
                return $this;
        }

        public function getImagen()
        {
                return $this->imagen;
        }

        public function setImagen($imagen): self
        {
                $this->imagen = $imagen;
                return $this;
        }

        public function getObservaciones()
        {
                return $this->observaciones;
        }

        public function setObservaciones($observaciones): self
        {
                $this->observaciones = $observaciones;
                return $this;
        }
    

        /****Construc */

        public function __construct()
        {
            require_once "config/db.php";
            $this->basededatos=Conexion::conectar();
        }
        // 

        /****METODO CRGA INICIAL PAGINA *****/
       
        public function Datos_Entregar()
		{
			$consulta="call Carga_Entregar()";
			$resultado=$this->basededatos->query($consulta);
			return $resultado;
		}
        /****Contador para imagen */

        public function Conteo()
		{
			$consulta="SELECT COUNT(1) q FROM entregas WHERE ordenes_idorden= $this->ODT";
			$resultado=$this->basededatos->query($consulta);
            echo $resultado;
			return $resultado;
		}
		/********************************* */
        public function Entrego()
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
        
    }   

?>