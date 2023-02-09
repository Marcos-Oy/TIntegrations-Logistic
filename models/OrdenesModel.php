<?php

    class OrdenesModel
    {

        public function __construct()
        {
                require_once "config/db.php";
                $this->basededatos = Conexion::conectar();
        }
        
        /*************Variables*****************/

        private $username, $idoficina, $idbodega;
        private $tipopago;
        private $rutrmtt, $nombrermtt, $tel1rmtt, $tel2rmtt;
        private $rutdtno, $nombredtno, $tel1dtno, $tel2dtno;
        private $comuna, $direccion, $referencia;
        private $peso, $dimensiones, $qbultos, $qsobres, $valorflete;
        private $origen;
        private $observaciones;
        private $fecha;
        private $ODT;
        private $repartidor;
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
        
        public function getRepartidor()
        {
            return $this->repartidor;
        }

        public function setRepartidor($repartidor): self
        {
            $this->repartidor = $repartidor;
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
    

        
        // 

        /****METODO CRGA INICIAL PAGINA RECIBIRORDEN*****/
        public function Datos_Solicitud()
        {
                $consulta = "call Cargar_Recibir($this->bodega)";
                $resultado = $this->basededatos->query($consulta);
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
		$consulta="call Orden_Recibir('".$this->ODT."', '".$this->fecha."', '".$this->username."',".$this->bodega.")";
			
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
		$consulta="call asignar_orden_obtener($this->bodega)";			
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
        public function AsignarCon_Codigo()
        {
                $consulta="call Con_Codigo(".$this->ODT.", '".$this->fecha."', '".$this->username."',".$this->bodega.",'".$this->repartidor."',".$this->idactividad.")";
                $resultado=$this->basededatos->query($consulta);
                if($resultado== 0)
                {
                        return false;
                }
                else
                {
                        return true;
                }
        }
        
        


       

       

        
    

        

        /************Método para crear orden**********/

        public function Crear_Orden()
        {
                $consulta = "call Orden_crear('$this->username', 
                                               $this->idoficina, 
                                               $this->idbodega,
                                               $this->tipopago, 
                                               '$this->rutrmtt', 
                                               '$this->nombrermtt',
                                               '$this->tel1rmtt',
                                               '$this->tel2rmtt',
                                               '$this->rutdtno', 
                                               '$this->nombredtno',
                                               '$this->tel1dtno',
                                               '$this->tel2dtno',
                                               $this->comuna, 
                                               '$this->peso', 
                                               $this->dimensiones, 
                                               $this->qbultos, 
                                               $this->qsobres,
                                               $this->valorflete,
                                               $this->origen, 
                                               '$this->direccion',
                                               '$this->referencia', 
                                               '$this->observaciones',
                                               '$this->fecha')";
                $resultado = $this->basededatos->query($consulta);
                #echo $consulta."<br>";
                return $resultado;
        }

        /************************* */






        /**
         * Get the value of observaciones
         */
        public function getObservaciones()
        {
                return $this->observaciones;
        }

        /**
         * Set the value of observaciones
         *
         * @return  self
         */
        public function setObservaciones($observaciones)
        {
                $this->observaciones = $observaciones;

                return $this;
        }

        /**
         * Get the value of origen
         */
        public function getOrigen()
        {
                return $this->origen;
        }

        /**
         * Set the value of origen
         *
         * @return  self
         */
        public function setOrigen($origen)
        {
                $this->origen = $origen;

                return $this;
        }

        /**
         * Get the value of valorflete
         */
        public function getValorflete()
        {
                return $this->valorflete;
        }

        /**
         * Set the value of valorflete
         *
         * @return  self
         */
        public function setValorflete($valorflete)
        {
                $this->valorflete = $valorflete;

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
         * Get the value of direccion
         */
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

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
         * Get the value of idoficina
         */
        public function getIdoficina()
        {
                return $this->idoficina;
        }

        /**
         * Set the value of idoficina
         *
         * @return  self
         */
        public function setIdoficina($idoficina)
        {
                $this->idoficina = $idoficina;

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
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of idbodega
         */ 
        public function getIdbodega()
        {
                return $this->idbodega;
        }

        /**
         * Set the value of idbodega
         *
         * @return  self
         */ 
        public function setIdbodega($idbodega)
        {
                $this->idbodega = $idbodega;

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
}