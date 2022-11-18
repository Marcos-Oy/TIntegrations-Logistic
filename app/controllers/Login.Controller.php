<?php

class LoginController{
    public function login(){
        include "resources/views/login/login.php";
    }
    public function iniciotest(){
        session_start();
        session_id($_POST['username']);
        

    
        require_once( "resources/views/dashboard/dashboard.php");
    }
}
?>