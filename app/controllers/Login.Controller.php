<?php

class LoginController{
    public function login(){  
        session_unset();
        session_destroy();
        include "resources/views/login/login.php";
    }

    public function Dash()
    {
        include "resources/views/dashboard/dashboard.php";        
    }

    public function LoginUser()
    {
        
        if ((isset($_POST['usuario'])) && ($_POST['usuario'] != ''))
		{
            include("models/usuariosModel.php");
            //$obj = new UsersController();
            $usuario = $_POST['usuario'] ?? '';
            $password = $_POST['password'] ?? '';
            $apt= new usuariosModel();
            $apt->setusername($usuario);
            $apt->setpass($password);
			$resultado=$apt->LoginUsuario();
            if(mysqli_num_rows($resultado) > 0)
            {
                while($rows = $resultado->fetch_assoc()) {
                    
                    // If you want to display all results from the query at once:
                    //print_r($rows);
                
                    // If you want to display the results one by one
                    //echo $rows['username'];
                    //echo $rows['nombre']; // etc..
                    //echo "<script>console.log('Debug Objects: " . $rows['nombre'] . "' );</script>";
                    $_SESSION['username'] = $rows['username'];
                    $_SESSION['pass'] = $rows['pass'];
                    $_SESSION['idbodega'] = $rows['idbodega'];
                    $_SESSION['bodega'] = $rows['bodega'];
                    $_SESSION['usuario'] = $rows['nombre'] . ' ' .$rows['paterno'];
                    //echo "<script>$('#alert').remove();</script>";
                    echo "<script>window.location= '?control=DashBoard&action=Dash'</script>";
                }
               
            }
            else {
                echo "<script>
							alert('usuario y/o contraseña incorrecta.');
							window.location= '?control=Login&action=login'
						</script>";
                //echo "<script>window.alert(Usuario y/o clave incorrecta); window.location= '?control=Login&action=login'</script>";
                //include "resources/views/login/login.php";
                //echo "<script>window.alert('No existe el usuario');</script>";
                //die('<div class="alert alert-danger" id="alert" role="alert">Usuario y/o calve incorrecta.</div>');
                //print_r('<p id="alert">Usuario y/o clave incorrecta.</p>');
            } 
        }
        else
        {
            echo "<script>window.location= '?control=Login&action=login'</script>";
        } 
            
    }

    public function LogOut(){
        session_unset();
        session_destroy();
        echo "<script> window.location= '?control=Login&action=login' </script>";
    }
}
?>