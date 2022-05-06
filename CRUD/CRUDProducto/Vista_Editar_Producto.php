<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS-->
    <link rel="stylesheet" href="StyleH.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Modificar Producto</title>
</head>
<body>
    <?php
        include '../Config/Conexion.php';
        $ID = $_REQUEST['id'];

        $sql = "SELECT * FROM productos INNER JOIN categoria WHERE Id_Producto = $ID  ";

        $resultado = $conexion->query($sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Editar Producto</h1>
        </center>
        <form action="../CRUDProducto/Editar_Producto.php?IdEditar=<?php echo $Fila['Id_Producto']?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nombre del producto</label>
                <input required type="text" class="form-control" name="NombreProducto"
                value="<?php echo $Fila['NombreProducto'] ;?>">
            </div>
        
            <div class="mb-3">
                <label class="form-label">Stock del producto</label>
                <input  required type="text" class="form-control" name="StockProducto"
                value="<?php echo $Fila['Stock']?>">
            </div>
            <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>">
            <div class="mb-3">
                <label class="form-label">Imagen del producto</label>
                <input required type="file" class="form-control" name="ImagenProducto">
            </div>

            <div class="mb-3">
                <label class="form-label">Descripcion del producto</label>
                <input required type="text" 
                class="form-control" 
                name="DescripcionLargaProducto"
                value="<?php echo $Fila['DescripcionLarga'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion corta producto</label>
                <input required type="text" class="form-control" name="DescripcionCortaProducto" value="<?php echo $Fila['DescripcionCorta']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio del producto</label>
                <input required type="text" class="form-control" name="PrecioProducto"
                value="<?php echo $Fila['Precio']?>"
                >
            </div>
        <br>

        <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-up"></i>
            Editar
        </button>
        <a href="../Vistas/Vista_Producto.php" class="btn btn-info">
        <i class="fa-solid fa-angle-left"></i>
            Regresar
        </a>
        </form>
    </div>
   
</body>
</html>