<?php
//  Conexión a la base de datos por única vez.
 $conexion = mysqli_connect("localhost","root","","evab"); //Conexión a la base de datos.

// Verifico conexion a BD

//  if(mysqli_connect_errno()){
//      echo "ERRRRRROOOOORRR";
//  }else {
//      echo "SE CONECTOOOOOOOOO";
//  }


?>

<!-- INICIO DEL SEGUNDO HEADER (Cuando se accede a la página)-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Gestión de productos y profesionales en EVAB.</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="libs/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- CDN FONTAWESOME -->
        <script src="https://kit.fontawesome.com/ffbd9403e2.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <div class="wrapper">
            <!-- nav Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="brand">
                                <a href="administrar.php">
                                    <img src="img/logo.JPG" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <!-- <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@evab.com"><i class="fa fa-envelope"></i>info@evab.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="administrar.php" class="nav-item nav-link active">Inicio</a>
                                        <a href="articulos.php" class="nav-item nav-link">Artículos</a>
                                        <a href="profesionales.php" class="nav-item nav-link">Profesionales</a>
                                        <!-- <a href="nuevo_articulo.php" class="nav-item nav-link">Productos</a>
                                        <a href="contact.php" class="nav-item nav-link">Contacto</a> -->
                                        <a href="salir.php" class="btn">Salir del Sistema</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
            <!-- nav End -->
</html>