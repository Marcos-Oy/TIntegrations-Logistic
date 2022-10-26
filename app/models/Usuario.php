<?php
    class Usuario {
        private $db;

        public function __construct()
        {
            $this->db = new BaseDatos;
        }

        public function obtenerUsuarios(){
            $this->db->query("select * from usuarios");
            $resultados = $this->db->registros();
            return $resultados;
        }
    }