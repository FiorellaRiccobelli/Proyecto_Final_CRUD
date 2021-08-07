<?php
require 'header_admin.php';

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar un nuevo artículo</title>
</head>
<body>
    
    <!-- Page Header Start -->
    <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>CARGA DE DATOS DE NUEVOS ARTICULOS</h2>
                        </div>
                        <div class="col-12">
                            <a href="administrar.php">Inicio</a>
                            <a href="articulos.php">Artículos</a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Page Header End -->
    

    <!-- INICIO FORMULARIO CARGA DE NUEVOS ARTICULOS -->
    <div class="d-flex justify-content-center">
        <div  class="call-to-action d-flex justify-content-center" style="width:50%; ">
            <form action="articulos.php" method="post" style="color:white; ">
                <!-- Nombre del artículo -->
                <label for="nombre_articulo">Nombre del artículo:</label>
                <input type="text" name="nombre_articulo" placeholder="Ingrese nombre">
                <br>
                
                <!-- Tipo de artículo -->
                <label for="tipo_articulo">Tipo de artículo:</label>
                <select name="tipo_articulo" id="tipo_articulo" placeholder="Seleccione">
                    <option value="Diagnóstico">Diagnóstico</option>
                    <option value="Tratamiento">Tratamiento</option>
                </select>
                <br>

                <!-- Marca del artículo -->
                <label for="marca_articulo">Marca:</label>
                <input type="text" name="marca_articulo" placeholder="Ingrese marca">
                <br>

                <!-- Precio del artículo -->
                <label for="precio_articulo">Precio:</label>
                <input type="number" name="precio_articulo" placeholder="Ingrese el precio">
                <br>

                <!-- Disponibilidad del artículo -->
                <label for="disponibilidad">¿Está disponible?:</label>
                <select name="disponibilidad" id="disponibilidad" placeholder="Seleccione">
                    <option value="Stock">Stock</option>
                    <option value="Vendido">Vendido</option>
                </select>
                <br>

                <input type="submit" value="Cargar datos">
            </form>
        </div>
    </div>
    <!-- FIN FORMULARIO CARGA DE NUEVOS ARTICULOS -->

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