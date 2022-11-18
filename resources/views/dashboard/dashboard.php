<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
        include ('resources/views/layouts/dependencies.php');
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php
        include 'resources/views/layouts/navbar.php';
        include 'resources/views/layouts/aside.php';
    ?>
    <div class="wrapper">

        <div class="content-wrapper">
            <label >SESION ID<?php echo $session_id ?>;</label> 
            
            <label >hello</label>


            <label >SESION USUARIO<?php echo $_SESSION['usuario']?>;</label> 
            <div class="text-center">
                <img src="resources/assets/img/image(2).png">
            </div>


        </div>

    </div>
    <?php
        include 'resources/views/layouts/footer.php';
    ?>
</body>