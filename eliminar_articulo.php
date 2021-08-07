<?php
       include 'header_admin.php';
    //Recibo el id de la fila que quiero eliminar
    $id_articulo=$_GET['id'];
    //var_dump($id_articulo);
    // Hago la consulta SQL (elimino el registro)
    $sql="DELETE FROM `articulos` WHERE id_articulo='".$id_articulo."';";
    //var_dump($sql);
    // // Realizo la consulta (pido el registro)
    $consulta=mysqli_query($conexion,$sql);

    echo "<script> window.location='articulos.php'; </script>";
?>