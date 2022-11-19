<?php

class DashBoardController{
    public function Dash()
    {
        if ((isset($_SESSION['usuario'])) && ($_SESSION['usuario'] != ''))
		{
        include "resources/views/dashboard/dashboard.php";
    }
    else
    {
        echo "<script>window.alert('LA SESION DE ESTE USUARIO YA EXISTE');</script>";

    }    
        
        
    }
}
?>