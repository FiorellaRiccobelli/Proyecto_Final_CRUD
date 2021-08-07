<?php
    include "header.php";

//     echo "<script>
//     alert('Usuario: Prueba, Contraseña: 2021');
// </script>";


?>

<!DOCTYPE html>
<html lang="en">
    <body>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Ingresar al Sistema</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- SI HUBO UN ERROR EN LA VALIDACIÓN -->
            <div class="container" style="color:red; width=75%;">
                    <?php
                        if(isset($_GET['error'])){
                            echo "Se ha producido un error. Nombre de usuario o contraseña no válidos. Por favor, introduzca los valores correctos.";
                        }
                    ?>
            </div>
            



            <div class="d-flex justify-content-center">
                <div  class="call-to-action d-flex justify-content-center" style="width:50%; ">
                    <form action="administrar.php" method="post" >
                        <p>Usuario: <input type="text" name="usuario"></p>
                        <br>
                        <p>Contraseña: <input type="password" name="contraseña"></p>
                        <br>
                        
                        <input type="submit" class="btn btn-light" value="Ingresar">
                        
                    </form>
                </div>
            </div>

            <br>
            <div class="container">
                <b><u>Usuario:</u></b> Prueba
                <br>
                <b><u>Contraseña:</u></b>123456
            </div>
            
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