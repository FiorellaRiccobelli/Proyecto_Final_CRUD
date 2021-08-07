<?php
require 'header_admin.php';

if(!empty($_POST)){
    //echo "RECIBO DATOS FORMULARIO";
    //echo "<pre>".var_dump($_POST)."</pre>";

    // RECIBO LOS VALORES DEL FORMULARIO DE CARGA DE PROFESIONALES Y LOS GUARDO EN LAS SIGUIENTES VARIABLES.
    $nombre_profesional = $_POST['nombre_profesional'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $titulo = $_POST['titulo'];
    $especialidad = $_POST['especialidad'];
    $area = $_POST['area'];

    $sql="INSERT INTO `profesionales` (`id_profesional`, `nombre`, `apellido`, `dni`, `titulo`, `especialidad`, `area`) VALUES (NULL, '$nombre_profesional', '$apellido', '$dni', '$titulo', '$especialidad', '$area');";
    //$sql="INSERT INTO articulos (id_articulo, nombre_articulo, tipo, marca, precio, disponibilidad) VALUES (,$nombre_articulo, $tipo_articulo, $marca_articulo, $precio_articulo, $disponibilidad)";
    $resultado=mysqli_query($conexion,$sql);
}else {
    //echo "NO RECIBE NADA";
}

?>
<!-- En esta página se deberá presentar:
- Barra de búsqueda (filtrar por nombre o categoria)
 -->

 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profesionales</title>
 </head>
 <body>
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>LISTA DE PROFESIONALES</h2>
                    </div>
                <div class="col-12">
                    <a href="administrar.php">Inicio</a>
                    <a href="articulos.php">Articulos</a>
                </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <table align="center" border="4" class="call-to-action" style="color:#ffffff">
            <!-- Titulos de las columnas -->
            <tr>
                <td align="center">Nro</td>
                <td align="center">Nombre</td>
                <td align="center">Apellido</td>
                <td align="center">DNI</td>
                <td align="center">Profesión</td>
                <td align="center">Especialidad</td>
                <td align="center">Area</td>
                <td colspan=2 align="center">Acción</td>
            </tr>
            <!-- Traigo las filas de la tabla en phpMyAdmin usando php -->
            <?php
                //Obtengo toda la información de las Tablas profesionales y areas.
                $sql="SELECT id_profesional, nombre, apellido, dni, titulo, especialidad, nombre_area  FROM profesionales INNER JOIN areas ON profesionales.area=areas.id_area";
                //$sql="SELECT * FROM profesionales"; 
                $resultado=mysqli_query($conexion,$sql);
            
            while($filas=mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <td align="center"><?php echo $filas['id_profesional'] ?></td>
                    <td align="center"><?php echo $filas['nombre'] ?></td>
                    <td align="center"><?php echo $filas['apellido'] ?></td>
                    <td align="center"><?php echo $filas['dni'] ?></td>
                    <td align="center"><?php echo $filas['titulo'] ?></td>
                    <td align="center"><?php echo $filas['especialidad'] ?></td>
                    <td align="center"><?php echo $filas['nombre_area'] ?></td>
                    <td align="center"><a href="editar_profesional.php?id=<?php echo $filas['id_profesional'] ?>" color="white">Editar</a></td>
                    <td align="center"><a href="eliminar_profesional.php?id=<?php echo $filas['id_profesional'] ?>" color="white">Eliminar</a></td>
                </tr>
            <?php
            }
            ?>
            
        </table>
        <br><br>
        <div class="call-to-action ">
            <div class="d-flex justify-content-center">
                
                    <a class="btn" href="nuevo_personal.php">Nuevo profesional</a>
                
            </div>
        </div>        

 </body>
 </html>