<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS-->
    <link rel="stylesheet" href="../StyleH.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Lista de categorias</title>
</head>
<body>
    <?php include '../Header/Header.php'?>

    <div class="container">
        <br>
        <center>
            <h1>Lista de categorias</h1>
        </center>
        <a href="../CRUDCategoria/Vista_Agregar_Categoria.php" class="btn btn-outline-primary">Agregar Categoria</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
            <?php 
            include "../Config/Conexion.php";

            $sql = "SELECT * FROM categoria"; 
            $resultado = $conexion -> query($sql); 
            while ($Filas = $resultado->fetch_assoc()) { ?>  
                <tr>
                    <th scope="row"><?php echo $Filas['Id_Categoria']?></th>
                    <td><?php echo $Filas['Nombre']?></td>
                    <td><?php echo $Filas['Descripcion']?></td>
                    <td>
                    <a href="../CRUDCategoria/Eliminar_Categoria.php?id=<?php echo $Filas['Id_Categoria']?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>   
           
            </tbody>
        </table>
    </div>
</body>