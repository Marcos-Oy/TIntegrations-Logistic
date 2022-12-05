<?php
    class OrdenesModel
    {
        private $region, $bodega, $qbultos, $qsobres, $peso, $dimensiones, $comuna, $direcccion, $referencia, $rutrmtt, $nombrermtt, $tel1rmtt, $tel2rmtt, $rutdtno, $nombredtno, $tel1dtno, $tel2dtno, $username, $oficina, $valordeclarado, $tipodocumento, $ndoc, $tipopago;
    
        /**
         * Get the value of qbultos
         */
        public function getQbultos()
        {
            return $this->qbultos;
        }
    
        /**
         * Set the value of qbultos
         *
         * @return  self
         */
        public function setQbultos($qbultos)
        {
            $this->qbultos = $qbultos;
    
            return $this;
        }
    
        /**
         * Get the value of qsobres
         */
        public function getQsobres()
        {
            return $this->qsobres;
        }
    
        /**
         * Set the value of qsobres
         *
         * @return  self
         */
        public function setQsobres($qsobres)
        {
            $this->qsobres = $qsobres;
    
            return $this;
        }
    
        /**
         * Get the value of peso
         */
        public function getPeso()
        {
            return $this->peso;
        }
    
        /**
         * Set the value of peso
         *
         * @return  self
         */
        public function setPeso($peso)
        {
            $this->peso = $peso;
    
            return $this;
        }
    
        /**
         * Get the value of dimensiones
         */
        public function getDimensiones()
        {
            return $this->dimensiones;
        }
    
        /**
         * Set the value of dimensiones
         *
         * @return  self
         */
        public function setDimensiones($dimensiones)
        {
            $this->dimensiones = $dimensiones;
    
            return $this;
        }
    
        /**
         * Get the value of comuna
         */
        public function getComuna()
        {
            return $this->comuna;
        }
    
        /**
         * Set the value of comuna
         *
         * @return  self
         */
        public function setComuna($comuna)
        {
            $this->comuna = $comuna;
    
            return $this;
        }
    
        /**
         * Get the value of direcccion
         */
        public function getDirecccion()
        {
            return $this->direcccion;
        }
    
        /**
         * Set the value of direcccion
         *
         * @return  self
         */
        public function setDirecccion($direcccion)
        {
            $this->direcccion = $direcccion;
    
            return $this;
        }
    
        /**
         * Get the value of referencia
         */
        public function getReferencia()
        {
            return $this->referencia;
        }
    
        /**
         * Set the value of referencia
         *
         * @return  self
         */
        public function setReferencia($referencia)
        {
            $this->referencia = $referencia;
    
            return $this;
        }
    
        /**
         * Get the value of rutrmtt
         */
        public function getRutrmtt()
        {
            return $this->rutrmtt;
        }
    
        /**
         * Set the value of rutrmtt
         *
         * @return  self
         */
        public function setRutrmtt($rutrmtt)
        {
            $this->rutrmtt = $rutrmtt;
    
            return $this;
        }
    
        /**
         * Get the value of nombrermtt
         */
        public function getNombrermtt()
        {
            return $this->nombrermtt;
        }
    
        /**
         * Set the value of nombrermtt
         *
         * @return  self
         */
        public function setNombrermtt($nombrermtt)
        {
            $this->nombrermtt = $nombrermtt;
    
            return $this;
        }
    
        /**
         * Get the value of tel1rmtt
         */
        public function getTel1rmtt()
        {
            return $this->tel1rmtt;
        }
    
        /**
         * Set the value of tel1rmtt
         *
         * @return  self
         */
        public function setTel1rmtt($tel1rmtt)
        {
            $this->tel1rmtt = $tel1rmtt;
    
            return $this;
        }
    
        /**
         * Get the value of tel2rmtt
         */
        public function getTel2rmtt()
        {
            return $this->tel2rmtt;
        }
    
        /**
         * Set the value of tel2rmtt
         *
         * @return  self
         */
        public function setTel2rmtt($tel2rmtt)
        {
            $this->tel2rmtt = $tel2rmtt;
    
            return $this;
        }
    
        /**
         * Get the value of rutdtno
         */
        public function getRutdtno()
        {
            return $this->rutdtno;
        }
    
        /**
         * Set the value of rutdtno
         *
         * @return  self
         */
        public function setRutdtno($rutdtno)
        {
            $this->rutdtno = $rutdtno;
    
            return $this;
        }
    
        /**
         * Get the value of nombredtno
         */
        public function getNombredtno()
        {
            return $this->nombredtno;
        }
    
        /**
         * Set the value of nombredtno
         *
         * @return  self
         */
        public function setNombredtno($nombredtno)
        {
            $this->nombredtno = $nombredtno;
    
            return $this;
        }
    
        /**
         * Get the value of tel1dtno
         */
        public function getTel1dtno()
        {
            return $this->tel1dtno;
        }
    
        /**
         * Set the value of tel1dtno
         *
         * @return  self
         */
        public function setTel1dtno($tel1dtno)
        {
            $this->tel1dtno = $tel1dtno;
    
            return $this;
        }
    
        /**
         * Get the value of tel2dtno
         */
        public function getTel2dtno()
        {
            return $this->tel2dtno;
        }
    
        /**
         * Set the value of tel2dtno
         *
         * @return  self
         */
        public function setTel2dtno($tel2dtno)
        {
            $this->tel2dtno = $tel2dtno;
    
            return $this;
        }
    
        /**
         * Get the value of username
         */
        public function getUsername()
        {
            return $this->username;
        }
    
        /**
         * Set the value of username
         *
         * @return  self
         */
        public function setUsername($username)
        {
            $this->username = $username;
    
            return $this;
        }
    
        /**
         * Get the value of oficina
         */
        public function getOficina()
        {
            return $this->oficina;
        }
    
        /**
         * Set the value of oficina
         *
         * @return  self
         */
        public function setOficina($oficina)
        {
            $this->oficina = $oficina;
    
            return $this;
        }
    
        /**
         * Get the value of valordeclarado
         */
        public function getValordeclarado()
        {
            return $this->valordeclarado;
        }
    
        /**
         * Set the value of valordeclarado
         *
         * @return  self
         */
        public function setValordeclarado($valordeclarado)
        {
            $this->valordeclarado = $valordeclarado;
    
            return $this;
        }
    
        /**
         * Get the value of tipodocumento
         */
        public function getTipodocumento()
        {
            return $this->tipodocumento;
        }
    
        /**
         * Set the value of tipodocumento
         *
         * @return  self
         */
        public function setTipodocumento($tipodocumento)
        {
            $this->tipodocumento = $tipodocumento;
    
            return $this;
        }
    
        /**
         * Get the value of ndoc
         */
        public function getNdoc()
        {
            return $this->ndoc;
        }
    
        /**
         * Set the value of ndoc
         *
         * @return  self
         */
        public function setNdoc($ndoc)
        {
            $this->ndoc = $ndoc;
    
            return $this;
        }
    
        /**
         * Get the value of tipopago
         */
        public function getTipopago()
        {
            return $this->tipopago;
        }
    
        /**
         * Set the value of tipopago
         *
         * @return  self
         */
        public function setTipopago($tipopago)
        {
            $this->tipopago = $tipopago;
    
            return $this;
        }

        /**
         * Get the value of bodega
         */ 
        public function getBodega()
        {
                return $this->bodega;
        }

        /**
         * Set the value of bodega
         *
         * @return  self
         */ 
        public function setBodega($bodega)
        {
                $this->bodega = $bodega;

                return $this;
        }

        /**
         * Get the value of region
         */ 
        public function getregion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setregion($region)
        {
                $this->region = $region;

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

        /******************************/
        public function Crear_Orden()
        {

        }
        
    }   

?>