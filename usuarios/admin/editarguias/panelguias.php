<?php
 include_once("../../../php/conexion.php");
 session_start();

 if (isset($_SESSION['nombredelusuario'])) {
     $usuarioingresado = $_SESSION['nombredelusuario'];
 }else{
     header('location: ../../../index.php');
 }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/estilospanelusuario.css">
    <title>Gestion de Guias</title>
</head>
<body>
<table>
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de la guia">
		</form>
		</div>
			<tr><th colspan="5"><h1>Lista de Guias</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Numero</th>
			<th>ID</th>
            <th>Titulo</th>
            <th>Texto guia</th>
            <th>Id juego</th>
            <th>Acción</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT id_guia,titulo,texto_guia,id_juego FROM guia where titulo like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT * FROM guia ORDER BY id_guia asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
            echo "<td>".$mostrar['id_guia']."</td>";
            echo "<td>".$mostrar['titulo']."</td>";
            echo "<td>".$mostrar['texto_guia']."</td>";    
			echo "<td>".$mostrar['id_juego']."</td>";  
            echo "<td style='width:26%'><a href=\"./controlguias/editar.php?id_guia=$mostrar[id_guia]\">Modificar</a> | <a href=\"./controlguias/eliminar.php?id_guia=$mostrar[id_guia]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[titulo]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="./controlguias/agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo Juego</th></tr>
            <tr> 
                <td>Titulo</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>Texto guia</td>
                <td><input type="textarea" name="txtguia" required></td>
            </tr>
            <tr> 
                <td>Id juego</td>
                <td><input type="number" name="txtidjuego" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar esta guía?');">
			</td>
            </tr>
        </table>
    </form>
</div>
<h3><a href="../../../index.php">Volver a la Página de Inicio</a></h3>
<h3><a href="../../admin/administrador.php">Volver a Perfil de Usuario</a></h3>

</body>
</html>