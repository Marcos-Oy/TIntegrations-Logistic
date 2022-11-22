<?php
    class tipoDocumentoModel{
        private $id;
        
        public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

        public function show(){
            $query = "call tipo_documento_obtener(null)";
            $resultado = $this->basededatos->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $this->tipodedocumentos[] = $fila;
            }
        return $this->tipodedocumentos;
        }

        public function showById(){
            $query = "call tipo_documento_obtener($this->id)";
            $resultado = $this->basededatos->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $this->tipodedocumentos[] = $fila;
            }
        return $this->tipodedocumentos;
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }
