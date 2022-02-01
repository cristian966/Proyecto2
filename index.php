<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_menu.css">
    <link rel="stylesheet" href="css/estilos_inicio.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src=""></script>
    <title>Inicio</title>
</head>

<body class="fondo">
    <div class="menu_centrado">
        <div>
            <ul>
                <li><a class="active" href="index.php">Inicio</a></li>
                <li><a href="juegos/juegos_principal.php">Juegos</a></li>
                <li><a href="noticias/noticias_principal.php">Noticias</a></li>
                <li><a href="reviews/reviews_principal.php">Reviews</a></li>
                <li><a href="guias/guias_principal.php">Guías</a></li>
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

include_once "php/conexion.php";
        // session_start(); sesion ya inizada arriba para que no se ve el foro en caso de no estar registrado
        if (isset($_SESSION['nombredelusuario'])) {
            echo " <a href='usuarios/registrado/registrado.php'><h3>Perfil del usuario</h3></a> <br>";
        }else {
            echo "<a href='login/login.php'><h3>Iniciar sesión / Registrarse</h3></a>";
        }
       /* $query=mysqli_query($conn,"Select * from usuario where nombre_usuario = 'admin' and contraseña = 'admin'");
        // echo strval($query->fetch_row());
        $result = $query->fetch_row();
        echo strval($result[0]);
        echo strval($result[1]);
        
        $columna1 = $result[0];

        echo "<h1>$columna1</h1>";

        for ($i=0; $i < 20 ; $i++) { 
            
            echo "<h1>$columna1</h1>";
        }*/
        
    ?>
        
    </div>

    <br><br>
    <div class="divPadre">

    <a href="http://www.google.es">IR A SAN GOOGLE</a>

        <div class="contenedor1">
            <div class="titulo">
                <h1 class="titulo1">Utima Noticia</h1>
            </div>
            <!-- Agregar noticias en los divs -->
            <br>
            <div class="contenedor2">
                <img src="img/callofduty.png" alt="imagen noticia 2" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Call of Duty tendra un nuevo juego este año basado en el futuro espaciales con combate de naves</h1></a>
                </div>
            </div>
        </div>
<br>
        <div class="contenedor1">
            <div class="titulo">
                <h1 class="titulo1">Utimo Juego</h1>
            </div>
            <!-- Agregar juegos en los divs -->
            <br>
            <div class="contenedor2">
                <img src="img/fondoIndex.jpg" alt="imagen juego 1" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Titulo del juego que funcionara como enlace</h1></a>
                </div>
            </div>
        </div>
<br>
        <div class="contenedor1">
            <div class="titulo">
                <h1 class="titulo1">Utimo Review</h1>
            </div>
            <!-- Agregar juegos en los divs -->
            <br>
            <div class="contenedor2">
                <img src="img/callofduty.png" alt="imagen reviw 2" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Call of Duty tendra un nuevo juego este año basado en el futuro espaciales con combate de naves</h1></a>
                </div>
            </div>
        </div>
<br>
        <div class="contenedor1">
            <div class="titulo">
                <h1 class="titulo1">Utima guía</h1>
            </div>
            <!-- Agregar juegos en los divs -->
            <br>
            <div class="contenedor2">
                <img src="img/callofduty.png" alt="imagen guia 2" class="imagen">
                <div class="divcentrado">
                    <a href=""><h1>Call of Duty tendra un nuevo juego este año basado en el futuro espaciales con combate de naves</h1></a>
                </div>
            </div>
        </div>
<br>
       
    </div>
        
    </body>

</html>