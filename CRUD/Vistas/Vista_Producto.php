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
    <title>Vista Producto</title>
</head>

<body>
<?php include '../Header/Header.php'?>
    <div class="container">
        <br>
        <center>
            <h1>Lista de productos</h1>
        </center>
        <a href="../CRUDProducto/Vista_Nuevo_Producto.php" class="btn btn-outline-primary"><i class="fa-solid fa-circle-plus"></i> Nuevo Producto</a>
        <a href="../Index.php" class="btn btn-outline-primary"> <i class="fa-solid fa-angle-left"></i> Regresar</a>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Descripcion Corta</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../Config/Conexion.php';
                        
                        $sql = "SELECT * FROM productos" ;
                        $resultado = $conexion -> query($sql);

                        while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>    
                            <th scope="row"><?php echo $Fila['Id_Producto']?></th>
                            <td><?php echo $Fila['NombreProducto']?></td>
                            <td><?php echo $Fila['Precio']?></td>
                            <td><?php echo $Fila['Stock']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>"></td>
                            <td><?php echo $Fila['DescripcionLarga']?></td>
                            <td><?php echo $Fila['DescripcionCorta']?></td>
                            <td>
                                <a href="../CRUDProducto/Vista_Editar_Producto.php?id=<?php echo $Fila['Id_Producto']?>" class="btn btn-warning">
                                <i class="fa-solid fa-file-pen"></i>
                                </a>
                            </td>
                            <td>
                                <a href="../CRUDProducto/Eliminar_Producto.php?id=<?php echo $Fila['Id_Producto']?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            </td>

                            
                        </tr>    
                <?php } ?>
                </tbody>
            </table>
        </div>
        
     
    </div>
   
</body>
</html>