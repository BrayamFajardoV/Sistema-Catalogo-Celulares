<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nuevo Producto</title>
</head>
<body>
    <?php
        include '../Config/Conexion.php';
    ?>

    <div class="container">
        <br>
        <center>
            <h1>Nuevo Producto</h1>
        </center>
        <form action="../CRUDProducto/Agregar_Producto.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nombre del producto</label>
                <input required type="text" class="form-control" name="NombreProducto">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio del producto</label>
                <input required type="text" class="form-control" name="PrecioProducto">
            </div>
            <div class="mb-3">
                <label class="form-label">Stock del producto</label>
                <input  required type="text" class="form-control" name="StockProducto">
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen del producto</label>
                <input required type="file" class="form-control" name="ImagenProducto">
            </div>

            <div class="mb-3">
                <label class="form-label">Descripcion del producto</label>
                <textarea required class="form-control" placeholder="Descripcion del producto" name="DescripcionLargaProducto"></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Descripcion Corta</label>
                <textarea required class="form-control" placeholder="Descripcion del producto" name="DescripcionCorta"></textarea>
            </div>
            <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="../Vistas/Vista_Producto.php" class="btn btn-info">Regresar</a>
        </form>
    </div>
   
</body>
</html>