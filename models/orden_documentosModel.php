<?php
class orden_documentosModel
{

        public function __construct()
        {
                require_once "config/db.php";
                $this->basededatos = Conexion::conectar();
        }

        public function crear_odtdocumento()
        {
                $consulta = "call crear_odtdocumento($this->idorden, $this->iddocumento)";
                $resultado = $this->basededatos->query($consulta);
                if ($resultado == true) {
                        return true;
                } else {
                        return false;
                }
        }
        private $idorden;
        private $iddocumento;

        /**
         * Get the value of iddocumento
         */
        public function getIddocumento()
        {
                return $this->iddocumento;
        }

        /**
         * Set the value of iddocumento
         *
         * @return  self
         */
        public function setIddocumento($iddocumento)
        {
                $this->iddocumento = $iddocumento;

                return $this;
        }

        /**
         * Get the value of idorden
         */
        public function getIdorden()
        {
                return $this->idorden;
        }

        /**
         * Set the value of idorden
         *
         * @return  self
         */
        public function setIdorden($idorden)
        {
                $this->idorden = $idorden;

                return $this;
        }
}
