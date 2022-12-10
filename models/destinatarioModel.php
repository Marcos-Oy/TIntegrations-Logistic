<?php
class destinatariosModel
{
    private $rutdtno, $nombre, $fono1, $fono2;

    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }


    public function showByRut()
    {
        $query = "call destinatarios_obtener('$this->rutdtno');";
        #echo $query."<br>";
        $resultado = $this->basededatos->query($query);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $this->destinatario[] = $fila;
            }
            return $this->destinatario;
        } else {
            $e = "";
            return $e;
        }
    }

    public function updateDtno()
    {
        if (isset($this->nombre) && !empty($this->nombre)) {
            $nombre = "'" . $this->nombre . "'";
        } else {
            $nombre = null;
        }

        if (isset($this->fono1) && !empty($this->fono1)) {
            $tel1 = "'" . $this->fono1 . "'";
        } else {
            $tel1 = null;
        }

        if (isset($this->fono2) && !empty($this->fono2)) {
            $tel2 = "'" . $this->fono2 . "'";
        } else {
            $tel2 = null;
        }

        $query = "call destinatarios_actualizar('$this->rutdtno', '$nombre', '$tel1', '$tel2' )";
        $resultado = $this->basededatos->query($query);
        if ($resultado == true) {
            return true;
        } else {
            return false;
        }
    }

    public function crearDtno()
    {
        $query = "call destinatarios_crear('$this->rutdtno', '$this->nombre', '$this->fono1', '$this->fono2' )";
        $resultado = $this->basededatos->query($query);
        if ($resultado == true) {
            return true;
        } else {
            return false;
        }
    }

    

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of fono1
     */
    public function getFono1()
    {
        return $this->fono1;
    }

    /**
     * Set the value of fono1
     *
     * @return  self
     */
    public function setFono1($fono1)
    {
        $this->fono1 = $fono1;

        return $this;
    }

    /**
     * Get the value of fono2
     */
    public function getFono2()
    {
        return $this->fono2;
    }

    /**
     * Set the value of fono2
     *
     * @return  self
     */
    public function setFono2($fono2)
    {
        $this->fono2 = $fono2;

        return $this;
    }

    /**
     * Set the value of rutdtno
     *
     * @return  self
     */
    public function setRutdtno($rutdtno)
    {
        $this->rutdtno = $rutdtno;

        return $this;
    }

    /**
     * Get the value of rutdtno
     */
    public function getRutdtno()
    {
        return $this->rutdtno;
    }
}
