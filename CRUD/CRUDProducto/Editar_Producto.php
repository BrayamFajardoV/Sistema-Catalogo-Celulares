<?php


    include '../Config/Conexion.php';
  

    /*Tomamos los campos del formulario */

    $ID = $_REQUEST['IdEditar'];

    $nombreproducto = $_POST['NombreProducto'];
    $precioproducto = $_POST['PrecioProducto'];
    $stockproducto = $_POST['StockProducto'];
    $imagenproducto = addslashes(file_get_contents($_FILES['ImagenProducto']['tmp_name']));
    $descripcionproducto = $_POST['DescripcionLargaProducto'];
    $descripcioncorta = $_POST['DescripcionCortaProducto'];

    $sql = 
    "UPDATE productos SET
     NombreProducto='$nombreproducto', 
     Precio='$precioproducto', 
     Stock='$stockproducto', 
     Imagen='$imagenproducto', 
     DescripcionLarga='$descripcionproducto',
     DescripcionCorta='$descripcioncorta' 
     WHERE Id_Producto = $ID";


    $resultado = $conexion -> query($sql);
    

    if ($resultado) {
       header('Location: ../Vistas/Vista_Producto.php');
    }else {
        echo 'No se inserto';
    }