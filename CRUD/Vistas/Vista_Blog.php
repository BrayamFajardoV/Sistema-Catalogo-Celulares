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
    <title>Blog</title>
</head>
<body>
    <?php include '../Header/Header.php'?>
    <div class="container">
    <br>
        <center>
            <h1>Blog</h1>
        </center>
        
        <a href="../CRUDBlog/Vista_Nuevo_Blog.php" class="btn btn-outline-primary">
        <i class="fa-solid fa-newspaper"></i>
            Nueva entrada
        </a>
        <a href="../Index.php" class="btn btn-outline-primary">
        <i class="fa-solid fa-angle-left"></i>
            Regresar
        </a>
        <hr>
    </div>

    <div class="contenedor ">
        <?php
            include '../Config/Conexion.php';
                        
            $sql = "SELECT * FROM contenido ORDER BY Fecha DESC";
            $resultado = $conexion -> query($sql);

            while ($Fila = $resultado->fetch_assoc()) { ?>

                <div class="card tarjeta" style="width: 18rem;">      
                    <div class="card-body">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" 
                        class="card-img-top">
                        <hr>
                        <h5 class="card-title active"><?php echo $Fila['Titulo']?></h5>
                        <p class="card-text"><?php echo $Fila['Descripcion']?></p>
                        <a href="../CRUDBlog/Vista_Entrada_Blog.php?id=<?php echo $Fila['Id_Contenido']?>" class="btn btn-outline-primary">
                            Ir a la entrada
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <a href="../CRUDBlog/Eliminar_Blog.php?id=<?php echo $Fila['Id_Contenido']?>" class="btn btn-danger">Eliminar Entrada</a>
                    </div>
                </div>
                <br>
        <?php } ?>
    </div>


    
</body>
</html>