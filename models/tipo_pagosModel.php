<?php

class tipoPagosModel
{
    private $id;

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

    public function showById()
    {
        $query = "call tipo_pago_obetener($this->id);";
        $resultado = $this->basededatos->query($query);
        while ($fila = $resultado->fetch_assoc()) {
            $this->tipopagos[] = $fila;
        }
        return $this->tipopagos;
    
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
