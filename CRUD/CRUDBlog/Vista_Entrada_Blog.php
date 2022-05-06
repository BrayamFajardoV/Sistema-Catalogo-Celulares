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
    <title>Entrada de BLOG</title>
</head>
<body>
    <?php include '../Header/Header.php'?>
    <div class="container">
        <br>
        <?php
            include '../Config/Conexion.php';

            $ID = $_REQUEST['id'];
                        
            $sql = "SELECT * FROM contenido WHERE Id_Contenido = $ID";

            $resultado = $conexion -> query($sql);

            $Fila = $resultado->fetch_assoc()
        ?>
        <div class="container text-center">
        <h1><?php echo $Fila['Titulo'] ;?></h1>
                    <img style="width: 800px; " src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>"/>
                    <h4><?php echo $Fila['Descripcion']?></h4>
                    <br>
                    <a href="../Vistas/Vista_Blog.php" class="btn btn-outline-primary">
                        <i class="fa-solid fa-angle-left"></i>    
                        Regresar
                    </a>
        </div>
                    
                       

                        
                       
    </div>
</body>
</html>