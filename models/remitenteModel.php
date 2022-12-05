<?php
 class remitentesModel{
    private $rut;

    public function ShowById()
		{
			$consulta="call remitentes_obtener('".$this->rut."')";
			$resultado=$this->basededatos->query($consulta);
            return $resultado;
		}

    /**
     * Get the value of rut
     */ 
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set the value of rut
     *
     * @return  self
     */ 
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

 }