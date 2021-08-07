<?php
require 'header_admin.php';

if(isset($_POST['usuario'])){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    $sql="SELECT * FROM usuarios WHERE nombre='".$usuario."' AND contraseña='".$contraseña."' ";
    
    $resultado=mysqli_query($conexion,$sql); 

    // Obtengo el número de filas de $resultado.
    // Si hay un usuario con ese nombre y contraseña, me da 1 fila, de lo contrario me dará cero:
    $filas=mysqli_num_rows($resultado);

    if($filas>0){   //Si ha coincidido algún dato, redirecciono a la página
        echo "<script> window.location='administrar.php'; </script>";
    }else{
        echo "<script> window.location='ingresar.php?error=1'; </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <div>
            <!-- Hero Start -->
            <div class="hero">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2><span>S</span>istema de <span>G</span>estión de</h2>
                            <h2><span>A</span>rtículos y <span>P</span>rofesionales de la empresa <span>EVAB</span>.</h2>
                            <p>Sistema de altas, bajas y modificaciones (CRUD) para gestión tanto de artículos que comercializa la empresa 
                                como de los profesionales que trabajan en ella.</p>
                            <h5>CRUD=<span>C</span>reate <span>R</span>ead <span>U</span>pdate <span>D</span>elete.</h5>
                            <!-- <a class="btn" href="about.php">Saber más</a> -->
                        </div>
                        <div class="col-md-6">
                            <img src="img/bioing.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero End -->

        </div>
    </body>
</html>