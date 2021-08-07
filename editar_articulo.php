<?php
include 'header_admin.php';
$ListaTipo=array('Diagnóstico','Tratamiento');
$ListaOpciones=array('Stock','Vendido');

if(isset($_GET['id'])){
    // Recibo ID del registro que deseo modificar
    //echo "Variable GET".var_dump($_GET['id']);
    $id_articulo = $_GET['id'];

    $_GET['id'] = null;
    //echo "Variable GET".var_dump($_GET['id']);

    // // Hago la consulta SQL (pido toda la info de ese registro)
    $sql="SELECT * FROM `articulos` WHERE id_articulo='".$id_articulo."';";

    // // Realizo la consulta (pido el registro)
    $consulta=mysqli_query($conexion,$sql);

    $fila=mysqli_fetch_assoc($consulta);

    //echo var_dump($fila);
}

// Tomo los valores obtenidos al enviar el formulario y los guardo en las variables para hacer la query de actualización

if(isset($_GET['id_articulo'])){

    $id_articulo=$_GET['id_articulo'];
    $nombre_articulo=$_GET['nombre_articulo'];
    $tipo_articulo=$_GET['tipo_articulo'];
    $marca_articulo=$_GET['marca_articulo'];
    $precio_articulo=$_GET['precio_articulo'];
    $disponibilidad=$_GET['disponibilidad'];

    
    $sql2="UPDATE `articulos` SET `nombre_articulo`='".$nombre_articulo."', `tipo`='".$tipo_articulo."', `marca`='".$marca_articulo."', `precio`='".$precio_articulo."', `disponibilidad`='".$disponibilidad."' WHERE `articulos`.`id_articulo`=".$id_articulo.";";
    
    $resultado=mysqli_query($conexion,$sql2);

    //Redirecciono a página de articulos una vez realizada la modificación.
    echo "<script> window.location='articulos.php'; </script>";
    
}

?>

<!-- CARGO NUEVAMENTE EL MISMO HTML DE "nuevo_articulo.php" -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar artículo</title>
</head>
<body>
    
    <!-- Page Header Start -->
    <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>ACTUALIZACIÓN DE DATOS DE ARTICULOS</h2>
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
            
              
            <!-- <form method="post" action="articulos.php" style="color:white;"> -->
            <form   style="color:white;">
                
                <!-- AGREGO OTRO INPUT PARA EL ID -->
                <input type="hidden" name="id_articulo" value="<?php echo $fila['id_articulo']; ?>"> 


                <!-- Nombre del artículo -->                                                   
                <label for="nombre_articulo">Nombre del artículo:</label>
                <input type="text" name="nombre_articulo" placeholder="Ingrese nombre" value="<?php echo $fila['nombre_articulo']; ?>">
                <br>
                
                
                <!-- Tipo de artículo -->
                <label for="tipo_articulo">Tipo de artículo:</label>
                <select name="tipo_articulo" id="tipo_articulo">
                    <option >- Seleccione -</option>
                    <?php
                    $tipo=$fila['tipo'];
                    foreach($ListaTipo as $cada_tipo) {

                        if ($tipo==$cada_tipo) {
                            echo"<option  value=".$cada_tipo." selected>".$cada_tipo."</option>";
                        }else {
                            echo"<option value=".$cada_tipo." >".$cada_tipo."</option>";
                        }
                    }
                    ?>
                
                </select>
                <br>

                <!-- Marca del artículo -->
                <label for="marca_articulo">Marca:</label>
                <input type="text" name="marca_articulo" placeholder="Ingrese marca" value="<?php echo $fila['marca']; ?>">
                <br>

                <!-- Precio del artículo -->
                <label for="precio_articulo">Precio:</label>
                <input type="number" name="precio_articulo" placeholder="Ingrese el precio" value="<?php echo $fila['precio']; ?>">
                <br>

                <!-- Disponibilidad del artículo -->
                <label for="disponibilidad">¿Está disponible?:</label>
                <select name="disponibilidad" id="disponibilidad">
                    <option > - Seleccione -</option>
                    <?php
                    $disp=$fila['disponibilidad'];
                    foreach($ListaOpciones as $opcion) {

                        if ($disp==$opcion) {
                            echo"<option  value=".$opcion." selected>".$opcion."</option>";
                        }else {
                            echo"<option value=".$opcion." >".$opcion."</option>";
                        }
                    }
                    ?>
                </select>
                <br>

                <input type="submit" value="Actualizar datos">
                
            </form>


        </div>
    </div>
    <!-- FIN FORMULARIO CARGA DE NUEVOS ARTICULOS -->

    <br>
    <br>
    
    <!-- Comienzo Barra Azul tipo footer -->
    <div class="call-to-action">
            <div class="container d-flex justify-content-center">
                <div class="row align-items-center">
                    <a href="articulos.php">Regresar</a>
                </div>
            </div>
    </div>
    <!-- Fin Barra Azul tipo footer -->

</body>
</html>
