<?php
    class Pages extends Controller{

        public function __construct(){
            $this->articuloModelo = $this->modelo('Articulo');
            $this->usuarioModelo = $this->modelo('Usuario');
            //echo 'Controlador páginas cargadas';
        }

        public function index(){

            $articulos = $this->articuloModelo->obtenerArticulos();

            $usuarios = $this->usuarioModelo->obtenerUsuarios();

            $datos = [
                'titulo'=> 'Bienvenidos a MVC Tu Paquete',
                'usuarios' => $usuarios
            ];
            $this->vista('pages/inicio',$datos);
        }

        public function articulo(){
            //$this->vista('pages/articulo');
        }

        public function actualizar($id){
            echo $id;
        }
    }