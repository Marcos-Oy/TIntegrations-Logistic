<?php
    class tipoDocumentoModel{
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

    }
