<?php
class comunasModel
{
    private $comid;


    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

    public function showById()
    {
        $query = "call listarComuna($this->comid)";
        $com = $this->basededatos->query($query);
        foreach ($com as $row) {
            $comuna = $row[0];
        }
        return $comuna;
    }

    public function show()
    {
        $query = "call listarComunas();";
        $resultado = $this->basededatos->query($query);
        while ($fila = $resultado->fetch_assoc()) {
            $this->Comunas[] = $fila;
        }
        return $this->Comunas;
    }

    /**
     * Get the value of comid
     */
    public function getComid()
    {
        return $this->comid;
    }

    /**
     * Set the value of comid
     *
     * @return  self
     */
    public function setComid($comid)
    {
        $this->comid = $comid;

        return $this;
    }
}
?>