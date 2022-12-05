<?php 

    class Helper {

        public function iniciar(){
            if(!isset($_SESSION['usuario'])){
                echo "<script>window.location= '?control=Login&action=login'</script>";
            }
        }

        public static function validar_session(){
            $valida = true;
            if(!isset($_SESSION['usuario'])){
                //echo "<script>window.location= '?control=Login&action=login'</script>";
                $valida=false;
            }
            return $valida;
        }

    }

?>