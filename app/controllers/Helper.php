<?php 

    class Helper {

        public function iniciar(){
            if(!isset($_SESSION['usuario'])){
                echo "<script>window.location= '?control=Login&action=login'</script>";
            }
        }

    }

?>