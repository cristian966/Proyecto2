<?php include_once("../../../../php/conexion.php"); 
    
    $nombre = $_POST['txtnombre'];
    $descripcion = $_POST['txtcontrasena'];
    $foto = $_POST['txtemail'];
    
	mysqli_query($conn, "INSERT INTO review(titulo,texto_review,id_juego) VALUES('$nombre','$descripcion','$foto')");
    
header("Location: ../panelreview.php");
	

?>