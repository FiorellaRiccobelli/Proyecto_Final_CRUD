<?php
include 'header_admin.php';

// echo var_dump($_POST);


if(!empty($_POST)){
    //echo "RECIBO DATOS FORMULARIO";
        // echo var_dump($nombre_articulo);
        // echo "<br>";
        // echo var_dump($tipo_articulo);
        // echo "<br>";
        // echo var_dump($marca_articulo);
        // echo "<br>";
        // echo var_dump($precio_articulo);
        // echo "<br>";
        // echo var_dump($disponibilidad);
        
    // RECIBO LOS VALORES DEL FORMULARIO DE CARGA DE ARTICULOS Y LOS GUARDO EN LAS SIGUIENTES VARIABLES.
    $nombre_articulo = $_POST['nombre_articulo'];
    $tipo_articulo = $_POST['tipo_articulo'];
    $marca_articulo = $_POST['marca_articulo'];
    $precio_articulo = $_POST['precio_articulo'];
    $disponibilidad = $_POST['disponibilidad'];

    $sql="INSERT INTO `articulos` (`id_articulo`, `nombre_articulo`, `tipo`, `marca`, `precio`, `disponibilidad`) VALUES (NULL, '$nombre_articulo', '$tipo_articulo', '$marca_articulo', '$precio_articulo', '$disponibilidad');";
    //$sql="INSERT INTO articulos (id_articulo, nombre_articulo, tipo, marca, precio, disponibilidad) VALUES (,$nombre_articulo, $tipo_articulo, $marca_articulo, $precio_articulo, $disponibilidad)";
    $resultado=mysqli_query($conexion,$sql);
}else {
    //echo "NO RECIBE NADA";
}


?>


<!-- En esta página se deberá presentar:
- Tabla de artículos (con opcion de modificar o eliminar)
- Barra de búsqueda (filtrar por nombre, tipo o marca)
- Botón para ingresar un nuevo artículo que me envíe a la página nuevo_articulo.php que muestre el formulario.

En esta tabla se deberá poder listar en función de si el artículo está o no en stock o listar todos.
Si fue vendido, que se indique por cual de los profesionales del área de venta.

Se debería poder conectar con la página de "productos" que ve el usuario y en ella sólo listar (por categoría) los que estén en stock.
Al listar, dar opción a un botón de "Más información" por cada registro de equipamiento que permita la descarga de un catálogo.

 -->

 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Artículos</title>
 </head>
 <body>
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>LISTA DE ARTICULOS</h2>
                    </div>
                <div class="col-12">
                    <a href="administrar.php">Inicio</a>
                    <a href="profesionales.php">Profesionales</a>
                </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <table align="center" border="4" class="call-to-action" style="color:#ffffff">
            <!-- Titulos de las columnas -->
            <tr>
                <td align="center">Código Art.</td>
                <td align="center">Nombre</td>
                <td align="center">Tipo</td>
                <td align="center">Marca</td>
                <td align="center">Precio</td>
                <td align="center">Disponibilidad</td>
                <td colspan=2 align="center">Acción</td>
            </tr>
            <!-- Traigo las filas de la tabla en phpMyAdmin usando php -->
            <?php
                $sql="SELECT * FROM articulos"; //Obtengo toda la información de la Tabla articulos.
                $resultado=mysqli_query($conexion,$sql);
            
            while($filas=mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <td align="center"><?php echo $filas['id_articulo'] ?></td>
                    <td align="center"><?php echo $filas['nombre_articulo'] ?></td>
                    <td align="center"><?php echo $filas['tipo'] ?></td>
                    <td align="center"><?php echo $filas['marca'] ?></td>
                    <td align="center"><?php echo $filas['precio'] ?></td>
                    <td align="center"><?php echo $filas['disponibilidad'] ?></td>
                    <td align="center"><a href="editar_articulo.php?id=<?php echo $filas['id_articulo'] ?>" color="white">Editar</a></td>
                    <td align="center"><a href="eliminar_articulo.php?id=<?php echo $filas['id_articulo'] ?>" color="white">Eliminar</a></td>
                </tr>
            <?php
            }
            ?>
            
        </table>
        <br><br>
        <div class="call-to-action ">
            <div class="d-flex justify-content-center">
                
                    <a class="btn" href="nuevo_articulo.php">Nuevo artículo</a>
                
            </div>
        </div>        

 </body>
 </html>