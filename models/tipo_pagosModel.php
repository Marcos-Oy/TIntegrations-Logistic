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
        $query = "call tipo_pago_obetener(null);";
        $resultado = $this->basededatos->query($query);
        while ($fila = $resultado->fetch_assoc()) {
            $this->tipopagos[] = $fila;
        }
        return $this->tipopagos;
    
    }
}
