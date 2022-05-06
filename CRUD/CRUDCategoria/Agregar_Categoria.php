<?php 

    include '../Config/Conexion.php';

    $nombrecategoria = $_POST['NombreCategoria'];
    $Descripcioncategoria = $_POST['DescripcionCategoria'];


    $sql = "INSERT INTO categoria (Nombre,Descripcion) VALUES ('$nombrecategoria','$Descripcioncategoria')";


    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: ../Vistas/Vista_Categoria.php');
     }else {
         echo 'No se inserto';
     }


