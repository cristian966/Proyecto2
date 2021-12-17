<?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
}
else
{
	header('location: ../../login/login.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: ../../index.php');
}
// include_once "../../php/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/user_ya_registrado.css">
    <title>Cuenta</title>
</head>
<body>
<h1>Datos del Usuario</h1>

<table class="tabla">
<th>Información de la cuenta</th>
    <tr>
        <td>Nombre de usuario: </td>
        <td class="td2"> <?php echo "$usuarioingresado";?></td>  
    </tr>
    <tr>
        <td>Email: </td>
        <td class="td2">Prueba</td>
    </tr>
    <tr>
        <td>Contraseña: </td>
        <td class="td2">prueba de texto</td>
    </tr>
</table>

<h3><a href="../../index.php">Volver a la página principal</a></h3>
<form method="POST">
<input type="submit" value="Cerrar sesión" name="btncerrar" />
</form>
</body>
</html>
