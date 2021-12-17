<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos_inicio.css">
    <title>Juego</title>
</head>
<body>
    <!-- menu general -->

    <div class="login">
    <?php
        session_start();
        if (isset($_SESSION['nombredelusuario'])) {
            echo " <a href='../../usuarios/registrado/registrado.php'><h3>Perfil del usuario</h3></a> <br>";
        }else {
            echo "<a href='../../login/login.php'><h3>Iniciar sesión / Registrarse</h3></a>";
        }
    ?>
        
    </div>

    <!-- Foto del juego centrada -->

    <div>
        <div>
            <img src="" alt="">
        </div>
        <!-- descripcion del juego -->
        <p>
            <!-- descripcion del juego -->
        </p>
        <span>
            <!-- pie de pagina enlaces para volver a juegos(principal), ir a su post,
            ir a su review, ir a su guia -->
        </span>
    </div>

</body>
</html>