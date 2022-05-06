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
    <title>Nueva entrada de blog</title>
</head>
<body>
    <?php include '../Header/Header.php'?>
    <div class="container">
        <br>
        <center>
            <h1>Nueva entrada</h1>
        </center>
        <form action="../CRUDBlog/Agregar_Blog.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Titulo de la entrada</label>
                <input type="text" class="form-control"  placeholder="Titulo de la entrada" name="TituloBlog">
            </div>
        
            <div class="mb-3">
                <label class="form-label">Descripcion de la entrada</label>
                <textarea required class="form-control" placeholder="Descripcion de la entrada" name="DescripcionBlog"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen de la entrada</label>
                <input type="file" class="form-control"  placeholder="Titulo de la entrada" name="ImagenBlog">
            </div>

            <button type="submit" class="btn btn-primary">Publicar Entrada</button>
            <a href="../Vistas/Vista_Blog.php" class="btn btn-outline-dark">regresar</a>
        </form>

    </div>
    
</body>
</html>