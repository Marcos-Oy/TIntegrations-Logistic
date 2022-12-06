<?php
class tarifaModel
{
    private $comuna;
    private $peso, $sobres;


    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

    public function calcularTarifa()
    {
        $query = "select calcularFlete($this->peso,$this->sobres,$this->comuna) valorflete";
        //echo $query;
        $resultado = $this->basededatos->query($query);
        while ($calculo=$resultado->fetch_assoc())
        {
            $valorflete=$calculo['valorflete'];
        }

        return $valorflete;

       
    }
      


    

    /**
     * Get the value of comuna
     */
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set the value of comuna
     *
     * @return  self
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of sobres
     */
    public function getSobres()
    {
        return $this->sobres;
    }

    /**
     * Set the value of sobres
     *
     * @return  self
     */
    public function setSobres($sobres)
    {
        $this->sobres = $sobres;

        return $this;
    }
}
