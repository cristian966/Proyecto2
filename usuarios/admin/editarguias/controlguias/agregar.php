<?php include_once("../../../../php/conexion.php"); 
    
    $nombre = $_POST['txtnombre'];
    $descripcion = $_POST['txtguia'];
    $idjuego = $_POST['txtidjuego'];
    
	mysqli_query($conn, "INSERT INTO guia(titulo,texto_guia,id_juego) VALUES('$nombre','$descripcion','$idjuego')");
    
header("Location: ../panelguias.php");
	

?>