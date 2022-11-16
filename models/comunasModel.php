<?php
class comunasModel
{
    private $comid;
    private $regid;


    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

    public function showById()
    {
        $query = "call comunas_obtener($this->comid,null)";
        $com = $this->basededatos->query($query);
        foreach ($com as $row) {
            $this->Comunas[] = $row;
        }
        return $this->Comunas;
    }

    public function showByReg()
    {
        $query = "call comunas_obtener(null,$this->regid)";
        $com = $this->basededatos->query($query);
        foreach ($com as $row) {
            $this->Comunas[] = $row;
        }
        return $this->Comunas;
    }

    public function show()
    {
        $query = "call comunas_obtener(null,null);";
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