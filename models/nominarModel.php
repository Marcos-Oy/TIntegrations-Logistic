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
            if(isset($this->idoficina) && !empty($this->idoficina)){
                $ofi = "$this->idoficina";

            }else{
                $ofi = null;
            }

            if(isset($this->estorden) && !empty($this->estorden)){
                $est = "$this->estorden";

            }else{
                $est = null;
            }

            if(isset($this->comuna) && !empty($this->comuna)){
                $com = $this->comuna;

            }else{
                $com = null;
            }

            if(isset($this->fechacreaciondesde) && !empty($this->fechacreaciondesde)){
                $datcreades = "'$this->fechacreaciondesde'";

            }else{
                $datcreades = null;
            }

            if(isset($this->fechacreacionhasta) && !empty($this->fechacreacionhasta)){
                $datcreahas = "'$this->fechacreacionhasta'";

            }else{
                $datcreahas = null;
            }

            if(isset($this->fechaactividaddesde) && !empty($this->fechaactividaddesde)){
                $datactdes = "'$this->fechaactividaddesde'";

            }else{
                $datactdes = null;
            }

            if(isset($this->fechaactividadhasta) && !empty($this->fechaactividadhasta)){
                $datacthas = "'$this->fechaactividadhasta'";

            }else{
                $datacthas = null;
            }

            if(isset($this->repartidor) && !empty($this->repartidor)){
                $rep = "'$this->repartidor'";

            }else{
                $rep = null;
            }
            
            $consulta="call carga_nominar(".$ofi.",".$est.",".$com.",
            ".$datcreades.",".$datcreahas.",".$datactdes.",".$datacthas.",
            ".$rep.")";
			$resultado=$this->basededatos->query($consulta);
            return $resultado;
        }
    }
?>