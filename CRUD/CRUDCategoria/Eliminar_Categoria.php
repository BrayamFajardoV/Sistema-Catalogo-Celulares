<?php

    include '../Config/Conexion.php';

    $ID = $_REQUEST['id'];


    $sql = "DELETE FROM categoria WHERE Id_Categoria = '$ID'";

    $Resultado = $conexion -> query($sql);

    if ($Resultado) {
        header('Location: ../Vistas/Vista_Categoria.php');
    }else {
        echo 'No se elimino';
    }