<?php
    //redireccionar
    function redireccionar($pagina){
        header('localhost'.RUTA_URL . $pagina);
    }