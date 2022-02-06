<?php 
include_once("../../../../php/conexion.php");
include_once("../panelreview.php");

$codigo = $_GET['id_review'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM review WHERE id_review=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['id_review'];
    $nombre = $mostrar['titulo'];
    $descripcion = $mostrar['texto_review'];
	$idjuego = $mostrar['id_juego'];
}
?>
<html>
<head>    
		<title>Editar review</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../../../css/estilospanelusuario.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar usuario</th></tr>
		     <tr> 
                <td>ID review</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required ></td>
            </tr>
            <tr> 
                <td>Título</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
            </tr>
            <tr> 
                <td>Texto review</td>
                <td><input type="textarea" name="txtcorreo" value="<?php echo $descripcion;?>" required></td>
            </tr>
            <tr> 
                <td>Id juego</td>
                <td><input type="text" name="txtcontrasena" value="<?php echo $idjuego;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="../paneljuegos.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar esta review?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $codigo1 = $_POST['txtcodigo'];
	
	$nombre1 	= $_POST['txtnombre'];
    $descripcion1 	= $_POST['txtcorreo'];
    $idjuego1 	= $_POST['txtcontrasena']; 
      
    $querymodificar = mysqli_query($conn, "UPDATE review SET titulo='$nombre1',texto_review='$descripcion1',id_juego='$idjuego1' WHERE id_review=$codigo1");

  	echo "<script>window.location= '../panelreview.php' </script>";
    
}
?>