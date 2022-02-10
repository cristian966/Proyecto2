function llamadaPost(){

    $.ajax({
        type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url:"post.php", //url guarda la ruta hacia donde se hace la peticion
        data:{id_categoria:"1"}, // data recive un objeto con la informacion que se enviara al servidor
        dataType: 'json', // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
        success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
            //var jsonParseado = JSON.parse(datos) 
            //console.log(jsonParseado[0].titulo)
             
             console.log(datos[0].titulo)
             console.log(datos[0].texto_post);

             for(i = 0; i < datos.length; i++){
                const para = document.createElement("p");
                const node = document.createTextNode(datos[i].titulo + " " + datos[i].texto_post);
                para.appendChild(node);

                const element = document.getElementById("div1");
                element.appendChild(para);
             }
         },
         error:function(err){
             console.log('error' + err)
         }
        
    })
}
$(document).ready(function(){
    document.getElementById('boton').addEventListener('click', llamadaPost);
})


