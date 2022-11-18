<?php

class LoginController{
    public function login(){
        include "resources/views/login/login.php";
    }
    public function iniciotest(){
        
        $_SESSION['usuario'] = $_POST['usuario'];
       require_once( "resources/views/dashboard/dashboard.php");
    }
}
?>