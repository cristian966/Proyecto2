
<?php
 include_once("../php/conexion.php");

     function devolverpost()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "gaming";
    $categoria_id;

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if (!$conn) {
        die("No hay conexión: ".mysqli_connect_error());
    }

       if (!isset($_POST['id_categoria'])) {
        
         $categoria_id = 1;
       } 
       else{
        $categoria_id =$_POST['id_categoria'] ;
       }
       $queryusuarios = mysqli_query($conn, "SELECT titulo,texto_post  FROM post WHERE id_categoria = '{$categoria_id}'");
        //$queryusuarios = mysqli_query($conn, "SELECT titulo,texto_post  FROM post WHERE id_categoria = 1");
        
       // $mostrar = mysqli_fetch_array($queryusuarios);
       $posts =[];
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{ 
            $postAInsertar = new Post($mostrar['titulo'], $mostrar['texto_post']);
            array_push($posts, $postAInsertar);        
        }
       
       
        echo json_encode($posts);
       

    }

 devolverpost();
            
 class Post {
    public string $titulo;
    public string $texto_post;

    public function __construct(string $titulo, string $texto_post){
        $this->titulo = $titulo;
        $this->texto_post = $texto_post;
    }
}

?>

