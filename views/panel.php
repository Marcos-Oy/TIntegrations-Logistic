<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Paquete</title>

    <link rel="shortcut icon" href="../public/dist/img/AdminLTELogo.png" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php
            include "layouts/navbar.php";
            include "layouts/aside.php";
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php include "dashboard/dashboard.php"; ?>

        </div>
        <!-- /.content-wrapper -->

        <?php
            include "layouts/footer.php";
        ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>

    <script>
    function CargarContenido(pagina_php, contenedor) {
        $("." + contenedor).load(pagina_php);
    }
    $('.nav-link').click(function() {
        // if already any element in active status remove it
        $('.nav-link').removeClass('active');
        // add active status to this one only
        $(this).addClass('active');
    })
    </script>
</body>

</html>