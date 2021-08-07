<?php
    include 'header_admin.php';
    //Recibo el id de la fila que quiero eliminar
    $id_profesional=$_GET['id'];
    //var_dump($id_profesional);
    // Hago la consulta SQL (elimino el registro)
    $sql="DELETE FROM `profesionales` WHERE id_profesional='".$id_profesional."';";
    //var_dump($sql);
    // // Realizo la consulta (pido el registro)
    $consulta=mysqli_query($conexion,$sql);

    echo "<script> window.location='profesionales.php'; </script>";
?>