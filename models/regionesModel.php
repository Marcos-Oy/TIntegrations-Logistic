<?php
class regionesModel{
    private $regid;

    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

    public function showById(){
        $query = "call regiones_obtener($this->regid)";
        $resultado = $this->basededatos->query($query);
        foreach ($resultado as $row) {
            $region = $row['idregion'];
        }
        $this->basededatos->close();
        return $region;
    }

    public function show(){
        $query = "call regiones_obtener(null)";
        $resultado = $this->basededatos->query($query);
        while ($fila = $resultado->fetch_assoc()) {
            $this->regiones[] = $fila;
        }
        return $this->regiones;
    }

    /**
     * Get the value of regid
     */ 
    public function getRegid()
    {
        return $this->regid;
    }

    /**
     * Set the value of regid
     *
     * @return  self
     */ 
    public function setRegid($regid)
    {
        $this->regid = $regid;

        return $this;
    }
}
?>