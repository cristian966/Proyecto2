<?php
 include_once("../php/conexion.php");
 session_start();

 if (isset($_SESSION['nombredelusuario'])) {
     $usuarioingresado = $_SESSION['nombredelusuario'];
 }else{
     header('location: ../index.php');
 }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos_menu.css">
    <link rel="stylesheet" href="../css/estilos_inicio.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src=""></script>
    <title>Foro</title>
</head>

<body>
    <div class="menu_centrado">
        <div>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../juegos/juegos_principal.php">Juegos</a></li>
                <li><a href="../noticias/noticias_principal.php">Noticias</a></li>
                <li><a href="../reviews/reviews_principal.php">Reviews</a></li>
                <li><a href="../guias/guias_principal.php">Guías</a></li>
                <li><a class="active" href="foro_principal.php">Foro</a></li>
            </ul>
        </div>
    </div>
    <div class="login">

    <?php
        // session_start();
        if (isset($_SESSION['nombredelusuario'])) {
            echo " <a href='../usuarios/registrado/registrado.php' class='enlacesIniSesion'><h3>Perfil del usuario</h3></a> <br>";
        }else {
            echo "<a href='../login/login.php' class='enlacesIniSesion'><h3>Iniciar sesión / Registrarse</h3></a>";
        }
    ?>
    
    </div>

    <h1>Foro</h1>

    <div>
        <table>
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Nombre de la Categoría">
		</form>
		</div>
			<tr><th colspan="5"><h1>Categorías</h1></tr>
			<tr>
		    <th>Nombre</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT nombre_categoria FROM categorias where nombre_categoria like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT nombre_categoria FROM categorias ORDER BY id_categoria asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
            echo "<td>".$mostrar['nombre_categoria']."</td>"; 
                   
}
        ?>
    </table>
        </div>
    </div>

</body>

</html>