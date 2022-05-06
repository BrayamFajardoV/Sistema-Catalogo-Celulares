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
    <title>Catalogo de productos</title>
</head>
<body>
    <?php include "../Header/Header.php" ?>
    <br>
    <center>
        <h1>Catalogo de productos</h1>
    </center>
    <br>
    <div class="container contenedor">
        <?php 
            include '../Config/Conexion.php';

            $sql = "SELECT * FROM productos";
            
            $resultado = $conexion->query($sql);

            while ($Fila = $resultado->fetch_assoc()) { ?>
                <div class="tarjeta card text-center" style="width: 18rem;">
                    <img style="width: 300px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Fila['NombreProducto']?></h5>
                        <p class="card-text"><?php echo $Fila ['DescripcionCorta']?></p>
                    </div>

                    <a href="../CRUDProducto/Vista_Entrada_Producto.php?id=<?php echo $Fila['Id_Producto']?>"   class="btn btn-dark">Ver Mas</a>
                </div>
                
            <?php } ?>   
    </div>
</body>
