<?php include_once("../../../../php/conexion.php"); 
    
    $titulo = $_POST['txttitulo'];
    $texto = $_POST['txtnoticia'];
    $id_juego = $_POST['idjuego'];
      
	mysqli_query($conn, "INSERT INTO noticia(titulo,texto_noticia,id_juego) VALUES('$titulo','$texto','$id_juego')");
    
header("Location: ../panelnoticias.php");
	

?>