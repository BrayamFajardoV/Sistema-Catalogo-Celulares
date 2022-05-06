<?php
    include '../Config/Conexion.php';


    $tituloblog = $_POST['TituloBlog'];
    $descripcionblog = $_POST['DescripcionBlog'];
    $imagenblog = addslashes(file_get_contents($_FILES['ImagenBlog']['tmp_name']));
    $fechablog = date('y-m-d H:i:s');

    $sql = "INSERT INTO contenido (Titulo, Descripcion, Fecha, Imagen) VALUES('$tituloblog','$descripcionblog','$fechablog','$imagenblog')";

    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) {
        header('Location: ../Vistas/Vista_Blog.php');
    }else {
        echo "No insertados";
    }
