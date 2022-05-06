<?php

    include '../Config/Conexion.php';
  

    /*Tomamos los campos del formulario */

    $nombreproducto = $_POST['NombreProducto'];
    $precioproducto = $_POST['PrecioProducto'];
    $stockproducto = $_POST['StockProducto'];
    $imagenproducto = addslashes(file_get_contents($_FILES['ImagenProducto']['tmp_name']));
    $descripcionproducto = $_POST['DescripcionLargaProducto'];
    $descripcioncorta = $_POST['DescripcionCorta'];

    $sql = "INSERT INTO  `productos` ( NombreProducto, Precio, Stock, Imagen, DescripcionLarga,DescripcionCorta) VALUES('$nombreproducto','$precioproducto','$stockproducto','$imagenproducto','$descripcionproducto','$descripcioncorta')";


    $resultado = $conexion -> query($sql);
    

    if ($resultado) {
       header('Location: ../Vistas/Vista_Producto.php');
    }else {
        echo 'No se inserto';
    }