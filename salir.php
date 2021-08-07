<!-- Acá debo cerrar la conexión a la base de datos, cerrar sesión y volver automaticamente al index.php -->

<?php
    
    include 'header_admin.php'; //Aca abro la conexión

    mysqli_close($conexion); //Acá cierro conexión a BD
    echo "<script> window.location='index.php'; </script>"; //Redirecciono a index.php
?>

<!-- Colocar cierre de sesión -->
<!-- session_destroy(); -->
