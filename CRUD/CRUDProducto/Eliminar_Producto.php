<?php


    include '../Config/Conexion.php';
  

    /*Tomamos los campos del formulario */

    $ID = $_REQUEST['id'];


    $sql = "DELETE FROM productos WHERE Id_Producto = $ID";


    $resultado = $conexion -> query($sql);
    

    if ($resultado) {
       header('Location: ../Vistas/Vista_Producto.php');
    }else {
        echo 'No se inserto';
    }