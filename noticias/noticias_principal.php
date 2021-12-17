<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos_menu.css">
    <link rel="stylesheet" href="../css/estilos_inicio.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src=""></script>
    <title>Noticias</title>
</head>

<body class="fondo">
    <div class="menu_centrado">
        <div>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../juegos/juegos_principal.php">Juegos</a></li>
                <li><a class="active" href="noticias_principal.php">Noticias</a></li>
                <li><a href="../reviews/reviews_principal.php">Reviews</a></li>
                <li><a href="../guias/guias_principal.php">Guías</a></li>
                <?php 
                session_start();
                    if (isset($_SESSION['nombredelusuario'])) {
                        echo '<li><a href="foro/foro_principal.php">Foro</a></li>';
                    }else {
                        
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="login">
    <?php
        // session_start();
        if (isset($_SESSION['nombredelusuario'])) {
            echo " <a href='../usuarios/registrado/registrado.php'><h3>Perfil del usuario</h3></a> <br>";
        }else {
            echo "<a href='../login/login.php'><h3>Iniciar sesión / Registrarse</h3></a>";
        }
    ?>
        
    </div>
    <div>
        <form action="" method="post">
            <input type="text" name="buscar" id="" placeholder="&#128269; Buscar noticia">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <br><br>
    <div class="divPadre">

        <div class="contenedor1">
            <div class="titulo">
                <h1 class="titulo1">¡Utimas 5 Noticias añadidas!</h1>
            </div>
            <!-- Agregar reviews -->
            <div class="contenedor2">
                <img src="../img/fondoIndex.jpg" alt="imagen noticia 1" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Titulo de la Noticia que funcionara como enlace a la pagina (plantilla que cargara los datos de la noticia)</h1></a>
                </div>
            </div>
            <br>
            <div class="contenedor2">
                <img src="../img/fondoIndex.jpg" alt="imagen noticia 2" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Titulo de la Noticia que funcionara como enlace a la pagina (plantilla que cargara los datos de la noticia)</h1></a>
                </div>
            </div>
            <br>
            <div class="contenedor2">
                <img src="../img/fondoIndex.jpg" alt="imagen noticia 3" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Titulo de la Noticia que funcionara como enlace a la pagina (plantilla que cargara los datos de la noticia)</h1></a>
                </div>
            </div>
            <br>
            <div class="contenedor2">
                <img src="../img/fondoIndex.jpg" alt="imagen noticia 4" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Titulo de la Noticia que funcionara como enlace a la pagina (plantilla que cargara los datos de la noticia)</h1></a>
                </div>
            </div>
            <br>
            <div class="contenedor2">
                <img src="../img/fondoIndex.jpg" alt="imagen noticia 5" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Titulo de la Noticia que funcionara como enlace a la pagina (plantilla que cargara los datos de la noticia)</h1></a>
                </div>
            </div>
            
        </div>   
    </div>

</body>

</html>