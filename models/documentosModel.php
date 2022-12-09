<?php
class documentosModel
{
    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

    public function crearDocumento(){
        $consulta = "call documentos_crear('$this->idtipo_documento', '$this->valor_declarado', '$this->identificador')";
        // echo $consulta;
        $resultado = $this->basededatos->query($consulta);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $this->remitente[] = $fila;
            }
            return $this->remitente;
        } else {
            
            return false;
        }
    }

    private $idtipo_documento;
    private $valor_declarado;
    private $identificador;

    /**
     * Get the value of identificador
     */ 
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set the value of identificador
     *
     * @return  self
     */ 
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get the value of valor_declarado
     */ 
    public function getValor_declarado()
    {
        return $this->valor_declarado;
    }

    /**
     * Set the value of valor_declarado
     *
     * @return  self
     */ 
    public function setValor_declarado($valor_declarado)
    {
        $this->valor_declarado = $valor_declarado;

        return $this;
    }

    /**
     * Get the value of idtipo_documento
     */ 
    public function getIdtipo_documento()
    {
        return $this->idtipo_documento;
    }

    /**
     * Set the value of idtipo_documento
     *
     * @return  self
     */ 
    public function setIdtipo_documento($idtipo_documento)
    {
        $this->idtipo_documento = $idtipo_documento;

        return $this;
    }
}
