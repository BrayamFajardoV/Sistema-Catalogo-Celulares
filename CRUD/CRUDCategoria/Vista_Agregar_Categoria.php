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
    <title>Agregar categoria</title>
</head>
<body>
    <br>
    <center>
        <h1>Agregar Categoria</h1>
    </center>
    <br>
    <div class="container">
    <form action="../CRUDCategoria/Agregar_Categoria.php" method="POST" >
        <div class="mb-3">
            <label class="form-label">Nombre de la categoria</label>
            <input type="text" class="form-control" name="NombreCategoria">
        </div>
        <div class="mb-3">
                <label class="form-label">Descripcion de la categoria</label>
                <textarea required class="form-control" placeholder="Descripcion del producto" name="DescripcionCategoria"></textarea>
            </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="../Vistas/Vista_Categoria.php" class="btn btn-dark">Regresar</a>
    </form>
    </div>
</body>
