<?php
    class tipoDocumentoModel{

        public function show(){
            $query = "call listarTipodeDocumetnos";
            $resultado = $this->basededatos->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $this->tipodedocumentos[] = $fila;
            }
        return $this->tipodedocumentos;
        }

    }
