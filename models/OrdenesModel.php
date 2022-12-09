<?php
class OrdenesModel
{


        public function __construct()
        {
                require_once "config/db.php";
                $this->basededatos = Conexion::conectar();
        }
        // 

        /****METODO CRGA INICIAL PAGINA RECIBIRORDEN*****/
        public function Datos_Solicitud()
        {
                $consulta = "call Cargar_Recibir()";
                $resultado = $this->basededatos->query($consulta);
                return $resultado;
        }
        /********************************* */

        /*************Variables*****************/

        private $username, $idoficina, $idbodega;
        private $tipopago;
        private $rutrmtt;
        private $rutdtno;
        private $comuna, $direccion, $referencia;
        private $peso, $dimensiones, $qbultos, $qsobres, $valorflete;
        private $origen;
        private $observaciones;
        private $fecha;

        /************Método para crear orden**********/

        public function Crear_Orden()
        {
                $consulta = "call Orden_crear('$this->username', 
                                               $this->idoficina, 
                                               $this->idbodega,
                                               $this->tipopago, 
                                               '$this->rutrmtt', 
                                               '$this->rutdtno', 
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
                echo $consulta."<br>";
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
}
