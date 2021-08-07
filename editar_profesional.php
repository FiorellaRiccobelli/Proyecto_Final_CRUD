<?php
include 'header_admin.php';
// HACER LISTA DE AREAS O CARGAR DIRECTAMENTE DESDE PHPMYADMIN;
$ListaAreas=array(
    "Marketing y Publicidad"=>1,
    "Ventas y Comercialización"=>2,
    "Administración"=>3,
    "Atención al cliente"=>4,
    "Mantenimiento, Instalación y Traslado"=>5,
    "Capacitación y Asesoramiento"=>6,
    "Servicio Integral"=>7,
    "Innovación y Diseño de productos"=>8,
    "Recursos Humanos"=>9,
    "Higiene y Seguridad"=>10,
    "Finanzas"=>11,
    "Calidad"=>12
);

    // foreach($ListaAreas as $cada_area=>$valor) {
    //     echo "El valor de ".$cada_area." es ".$valor."";
    // }
// ------------------------
if(isset($_GET['id'])){
    // Recibo ID del registro que deseo modificar
    //echo "Variable GET".var_dump($_GET['id']);
    $id_profesional = $_GET['id'];

    $_GET['id'] = null;
    //echo "Variable GET".var_dump($_GET['id']);

    // // Hago la consulta SQL (pido toda la info de ese registro correspondiente a la vinculación de ambas tablas: profesionales y areas)
    $sql="SELECT id_profesional, nombre, apellido, dni, titulo, especialidad, nombre_area FROM profesionales INNER JOIN areas ON profesionales.area=areas.id_area where id_profesional='".$id_profesional."';";
    //$sql="SELECT * FROM `profesionales`,`areas` WHERE id_profesional='".$id_profesional."';";

    // // Realizo la consulta (pido el registro)
    $consulta=mysqli_query($conexion,$sql);

    $fila=mysqli_fetch_assoc($consulta);

    //echo var_dump($fila);
}

// Tomo los valores obtenidos al enviar el formulario y los guardo en las variables para hacer la query de actualización

if(isset($_GET['id_profesional'])){

    $id_profesional=$_GET['id_profesional'];
    $nombre=$_GET['nombre_profesional'];
    $apellido=$_GET['apellido'];
    $dni=$_GET['dni'];
    $titulo=$_GET['titulo'];
    $especialidad=$_GET['especialidad'];
    $area=$_GET['area'];


    $sql2="UPDATE `profesionales` SET `nombre`='".$nombre."', `apellido`='".$apellido."', `dni`='".$dni."', `titulo`='".$titulo."', `especialidad`='".$especialidad."',`area`='".$area."' WHERE `profesionales`.`id_profesional`=".$id_profesional.";";
    
    $resultado=mysqli_query($conexion,$sql2);

    //Redirecciono a página de articulos una vez realizada la modificación.
    echo "<script> window.location='profesionales.php'; </script>";
    
}

?>

<!-- CARGO NUEVAMENTE EL MISMO HTML DE "nuevo_personal.php" -->

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar profesional</title>
</head>
<body>
    
    <!-- Page Header Start -->
    <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>ACTUALIZACIÓN DE DATOS DE PROFESIONALES</h2>
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
            <!-- <form action="profesionales.php" method="post" style="color:white; "> -->
                
            <form   style="color:white;">
                
                <!-- AGREGO OTRO INPUT PARA EL ID -->
                <input type="hidden" name="id_profesional" value="<?php echo $fila['id_profesional']; ?>"> 


                <!-- Nombre del profesional -->
                <label for="nombre_profesional">Nombre:</label>
                <input type="text" name="nombre_profesional" placeholder="Ingrese nombre" value="<?php echo $fila['nombre']; ?>">
                <br>

                <!-- Apellido del profesional -->
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" placeholder="Ingrese apellido" value="<?php echo $fila['apellido']; ?>">
                <br>
                
                <!-- DNI -->
                <label for="dni">DNI:</label>
                <input type="number" name="dni" placeholder="Ingrese el DNI:" value="<?php echo $fila['dni']; ?>">
                <br>

                <!-- Titulo -->
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" placeholder="Ingrese profesión" value="<?php echo $fila['titulo']; ?>">
                <br>

                <!-- Especialidad -->
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" placeholder="Ingrese especialización" value="<?php echo $fila['especialidad']; ?>">
                <br>


                <!-- Area de trabajo dentro de la empresa -->
                <label for="area">Area:</label>
                <select name="area" id="area">
                    <option >- Seleccione -</option>    
                                        
                    <?php
                    $nombre_area=$fila['nombre_area'];
                    foreach($ListaAreas as $cada_area=>$valor) {

                        if ($nombre_area==$cada_area) {
                            echo"<option  value=".$valor." selected>".$cada_area."</option>";
                        }else {
                            echo"<option value=".$valor." >".$cada_area."</option>";
                        }
                    }

                    ?>

                </select>
                <br>


                <input type="submit" value="Cargar datos">
            </form>
        </div>
    </div>
    <!-- FIN FORMULARIO ACTUALIZACION PROFESIONALES -->

    
    <br>
    <br>
    
    <!-- Comienzo Barra Azul tipo footer -->
    <div class="call-to-action">
            <div class="container d-flex justify-content-center">
                <div class="row align-items-center">
                    <a href="profesionales.php">Regresar</a>
                </div>
            </div>
    </div>
    <!-- Fin Barra Azul tipo footer -->

</body>
</html>