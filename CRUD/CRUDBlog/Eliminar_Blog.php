<?php

    include '../Config/Conexion.php';

    $ID = $_REQUEST['id'];

    $sql = "DELETE FROM contenido WHERE Id_Contenido ='$ID'";

    $Resultado = $conexion -> query($sql);


    if ($Resultado) {
        header('Location: ../Vistas/Vista_Blog.php');
    }else {
        echo "Datos no eliminados";
    }
