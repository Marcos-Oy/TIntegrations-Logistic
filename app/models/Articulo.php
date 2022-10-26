<?php

class Articulo{
    private $db;

    public function __construct()
    {
        $this->db = new BaseDatos;
    }

    public function obtenerArticulos(){
        $this->db->query("select * from articulos");

        return $this->db->registros();
    }
}