<?php

class tipoPagosModel
{
    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }
    public function show()
    {
        $query = "call listarTipoPagos;";
        $resultado = $this->basededatos->query($query);
        while ($fila = $resultado->fetch_assoc()) {
            $this->tipopagos[] = $fila;
        }
        return $this->tipopagos;
    }
}
