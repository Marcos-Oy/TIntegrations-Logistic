<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel inicial</title>
    <?php
    include '../includes/plugins.php';
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include '../includes/header.php';
        ?>
        <div class="content-wrapper">

        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php
    include '../includes/footer.php';
    ?>
    <script src="js/validarRUT.js"></script>
    <script type="text/javascript" src="js/order_new.js"></script>
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