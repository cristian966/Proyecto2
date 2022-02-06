<?php include_once("../../../../php/conexion.php"); 
    
    $titulo = $_POST['txttitulo'];
    $texto = $_POST['txtnoticia'];
    $idjuego = $_POST['idjuego'];
      
	mysqli_query($conn, "INSERT INTO noticia(titulo,texto_noticia,id_juego) VALUES('$titulo','$texto','$idjuego')");
    
    header("Location: ../panelnoticias.php");
	

?>