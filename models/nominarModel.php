<?php
    class nominarModel{

        private $idoficina;
        private $estorden;
        private $comuna;
        private $fechacreaciondesde;
        private $fechacreacionhasta;
        private $fechaactividaddesde;
        private $fechaactividadhasta;
        private $repartidor;
		private $region;

        public function __construct()
        {
            require_once "config/db.php";
           // $con = new Conexion();
            //$this->PDO = $con->conexion();
            $this->basededatos=Conexion::conectar();
        }

        public function setidoficina($idoficina)
		{
			$this->idoficina=$idoficina;
		}
		public function getidoficina()
		{
			return $this->idoficina;
		}
      
        public function setestorden($estorden)
		{
			$this->estorden=$estorden;
		}
		public function getestorden()
		{
			return $this->estorden;
		}

        public function setcomuna($comuna)
		{
			$this->comuna=$comuna;
		}
		public function getcomuna()
		{
			return $this->comuna;
		}

        public function setfechacreaciondesde($fechacreaciondesde)
		{
			$this->fechacreaciondesde=$fechacreaciondesde;
		}
		public function getfechacreaciondesde()
		{
			return $this->fechacreaciondesde;
		}

        public function setfechacreacionhasta($fechacreacionhasta)
		{
			$this->fechacreacionhasta=$fechacreacionhasta;
		}
		public function getfechacreacionhasta()
		{
			return $this->fechacreacionhasta;
		}

        public function setfechaactividaddesde($fechaactividaddesde)
		{
			$this->fechaactividaddesde=$fechaactividaddesde;
		}
		public function getfechaactividaddesde()
		{
			return $this->fechaactividaddesde;
		}

        public function setfechaactividadhasta($fechaactividadhasta)
		{
			$this->fechaactividadhasta=$fechaactividadhasta;
		}
		public function getfechaactividadhasta()
		{
			return $this->fechaactividadhasta;
		}

        public function setrepartidor($repartidor)
		{
			$this->repartidor=$repartidor;
		}
		public function getrepartidor()
		{
			return $this->repartidor;
		}

        public function filtrar_nomninar(){
			$consulta ="call carga_nominar("; 
			if(isset($this->idoficina)&&!empty($this->idoficina)){
				$consulta .= "$this->idoficina, ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->estorden)&&!empty($this->estorden)){
				$consulta .= "$this->estorden, ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->region)&&!empty($this->region)){
				$consulta .= "$this->region, ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->comuna)&&!empty($this->comuna)){
				$consulta .= "$this->comuna, ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->fechacreaciondesde)&&!empty($this->fechacreaciondesde)){
				$consulta .= "'$this->fechacreaciondesde', ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->fechacreacionhasta)&&!empty($this->fechacreacionhasta)){
				$consulta .= "'$this->fechacreacionhasta', ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->fechaactividaddesde)&&!empty($this->fechaactividaddesde)){
				$consulta .= "'$this->fechaactividaddesde', ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->fechaactividadhasta)&&!empty($this->fechaactividadhasta)){
				$consulta .= "'$this->fechaactividadhasta', ";
			}else{
				$consulta .="null, ";
			}
			if(isset($this->repartidor)&&!empty($this->repartidor)){
				$consulta .= "'$this->repartidor')";
			}else{
				$consulta .="null)";
			}

            #$consulta="call carga_nominar('".$this->idoficina."','".$this->estorden."','".$this->comuna."',
            #'".$this->fechacreaciondesde."','".$this->fechacreacionhasta."','".$this->fechaactividaddesde."','".$this->fechaactividadhasta.",
            #'".$this->repartidor."'')";
			#echo $consulta;
			$resultado=$this->basededatos->query($consulta);
            return $resultado;
        }


		/**
		 * Get the value of region
		 */ 
		public function getRegion()
		{
				return $this->region;
		}

		/**
		 * Set the value of region
		 *
		 * @return  self
		 */ 
		public function setRegion($region)
		{
				$this->region = $region;

				return $this;
		}
    }
?>