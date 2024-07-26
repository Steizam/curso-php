<h1>codigo HTML</h1>

<?php 
    # Esto va a imprimir:
    echo "<h1>Codigo PHP</h1>";
    print("hola");

    // Esto no se interpreta

    /*
    muchas
    lineas
    de comentarios
    */

    echo "<!-- comentario html -->";

    #variables
    $nombre = $_GET["nombre"];

    if(isset($_GET["nombre"])){
        $nombre = $_GET["nombre"];
           }else{
        $nombre = "Victor";
    }

    $texto = "Repaso de PHP con ".$nombre;



    if(isset($_GET["altura"])){
        $altura = $_GET["altura"];
    }else{
        $altura = 180;
    }

    $textofinal =  "<h1>".$texto.", su altura es:".$altura."</h1>";

    echo $textofinal;
    echo $textofinal;
    echo $textofinal;

    $textofinal = "Te he troleado";
    echo $textofinal;

    #GET
    echo "<hr>";
    echo $_GET["nombre"];

    #Condiciones 
    if($altura >= 180){
        echo '<h3 style="background:green; color:white;">Eres una persona alta</h3>';
    }else{
        echo '<h3 style="background:red; color:white;">Eres una persona baja</h3>';
    }




?>