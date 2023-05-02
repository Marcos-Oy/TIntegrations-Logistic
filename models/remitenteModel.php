<?php
class remitentesModel
{
    private $rut;
    private $nombre;
    private $tel1;
    private $tel2;

    public function __construct()
    {
        require_once "config/db.php";
        $this->basededatos = Conexion::conectar();
    }

    public function ShowById()
    {
        $consulta = "call remitentes_obtener('$this->rut')";
        #echo $consulta . "<br>";
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

    public function showList()
    {
        $consulta = "select distinct rut from remitentes";
        $resultado = $this->basededatos->query($consulta);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $this->ruts[] = $fila;
            }
            return $this->ruts;
        } else {

            return false;
        }
    }
    public function UpdateById()
    {
        if (isset($this->nombre) && !empty($this->nombre)) {
            $nombre = "'" . $this->nombre . "'";
        } else {
            $nombre = null;
        }

        if (isset($this->tel1) && !empty($this->tel1)) {
            $fono1 = "'" . $this->tel1 . "'";
        } else {
            $fono1 = null;
        }

        if (isset($this->tel2) && !empty($this->tel2)) {
            $fono2 = "'" . $this->tel2 . "'";
        } else {
            $fono2 = null;
        }

        $query = "call destinatarios_actualizar('$this->rut', '$nombre', '$fono1', '$fono2' )";
        $resultado = $this->basededatos->query($query);
        if ($resultado == true) {
            return true;
        } else {
            return false;
        }
    }

    public function crearRemitente()
    {
        $consulta = "call remitentes_crear('$this->rut', '$this->nombre', '$this->tel1', '$this->tel2')";
        #echo $consulta . "<br>";
        $resultado = $this->basededatos->query($consulta);
        echo $resultado. "<br>";
        if ($resultado == true) {
            return true;
        } else {
            return false;
        }
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


    /**
     * Get the value of tel2
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set the value of tel2
     *
     * @return  self
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get the value of tel1
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set the value of tel1
     *
     * @return  self
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
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
}
