<?php
require 'header_admin.php';

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar un nuevo profesional</title>
</head>
<body>
    
    <!-- Page Header Start -->
    <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>CARGA DE DATOS DE NUEVOS PROFESIONALES</h2>
                        </div>
                        <div class="col-12">
                            <a href="administrar.php">Inicio</a>
                            <a href="profesionales.php">Profesionales</a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Page Header End -->
    

    <!-- INICIO FORMULARIO CARGA DE NUEVOS PROFESIONALES -->
    <div class="d-flex justify-content-center">
        <div  class="call-to-action d-flex justify-content-center" style="width:50%; ">
            <form action="profesionales.php" method="post" style="color:white; ">
                
                <!-- Nombre del profesional -->
                <label for="nombre_profesional">Nombre:</label>
                <input type="text" name="nombre_profesional" placeholder="Ingrese nombre">
                <br>

                <!-- Apellido del profesional -->
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" placeholder="Ingrese apellido">
                <br>
                
                <!-- DNI -->
                <label for="dni">DNI:</label>
                <input type="number" name="dni" placeholder="Ingrese el DNI:">
                <br>

                <!-- Titulo -->
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" placeholder="Ingrese profesión">
                <br>

                <!-- Especialidad -->
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" placeholder="Ingrese especialización">
                <br>



                <!-- Area de trabajo dentro de la empresa -->
                <label for="area">Area:</label>
                <select name="area" id="tipo_articulo" placeholder="Seleccione">
                    <option >- Seleccione -</option>
                    <option value="1">Marketing y Publicidad</option>
                    <option value="2">Ventas y Comercialización</option>
                    <option value="3">Administración</option>
                    <option value="4">Atención al cliente</option>
                    <option value="5">Mantenimiento, Instalación y Traslado</option>
                    <option value="6">Capacitación y Asesoramiento</option>
                    <option value="7">Servicio Integral</option>
                    <option value="8">Innovación y Diseño de productos</option>
                    <option value="9">Recursos Humanos</option>
                    <option value="10">Higiene y Seguridad</option>
                    <option value="11">Finanzas</option>
                    <option value="12">Calidad</option>
                </select>
                <br>

            

                <input type="submit" value="Cargar datos">
            </form>
        </div>
    </div>
    <!-- FIN FORMULARIO CARGA DE NUEVOS PROFESIONALES -->

    <br>
    <br>
    
    <!-- Comienzo Barra Azul tipo footer -->
    <div class="call-to-action">
            <div class="container">
                <div class="row align-items-center">
                    
                </div>
            </div>
    </div>
    <!-- Fin Barra Azul tipo footer -->

</body>
</html>