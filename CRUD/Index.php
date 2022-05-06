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
    <title>Index</title>
</head>
<body>
    <div class="hero">
            <nav>
                <h1 class="logo">Catalogo<span>DeCelulares</span></h1>
                <ul>
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Vistas/Vista_Catalogo_Productos.php">Catalogo Celulares</a></li>
                    <li><a href="Vistas/Vista_Producto.php">Productos</a></li>
                    <li><a href="Vistas/Vista_Categoria.php">Categorias</a></li>
                    <li><a href="Vistas/Vista_Blog.php">Blog</a></li>
                </ul>
            </nav>    
    </div>
    
    <div class="contenedor_Slider">
        <ul class="slider">
            <li id="slide2">
                <img src="/Img/mobile-g6cd7e2099_1280.jpg" alt="">
            </li>
            <li id="slide3">
                <img src="/Img/cellphones-g538386ab0_1920.jpg" alt="">
            </li>
            <li id="slide4" class="Slider_Info">
                    <img src="/Img/iphone-12-g3d9952257_1920.jpg" alt=""> 
            </li>

          
        </ul>
        <br><br><br><br>
        <ul class="menu">
                <li class="lia">
                    <a href="#slide2">1</a>
                </li>
                <li class="lia">
                    <a href="#slide3">2</a>
                </li>
                <li class="lia lia_4">
                    <a href="#slide4">3</a>
                </li>
        </ul>
    </div>
    <footer class="footer">
        <div class="container">
            <center>
                <h1 class="logo">SISTEMA DE <span>CATALOGO DE CELULARES</span></h1>
                <P>Este sistema fue hecho en PHP utilizando como gestor de base de datos MYSQL, tambien utilizando Boostrap 5 Fuentes de Google FONTS e Iconos de FONT AWESOME sin ningun patron de diseño</P>
                <a href="https://github.com/BrayamFajardoV" class="btn btn-outline-danger">Ir a mi Git-Hub</a>
            </center>     
        </div>
    </footer>
</body>
</html>