<?php

class LoginController{
    public function login(){
        include "resources/views/login/login.php";
    }
    public function iniciotest(){
        session_id($_POST['usuario']);
        $session_id=session_id($_POST['usuario']);
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
       require_once( "resources/views/dashboard/dashboard.php");
    }
}
?>