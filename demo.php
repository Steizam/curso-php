<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición
y guardamos el resultado
*/

$result = curl_exec($ch);


// una alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API
$data = json_decode($result, true);

curl_close($ch);


?>

<head>
    <title>Proxima Pelicula de Marvel</title>
    <meta charset="UTF-8"/>
    <meta name="description" content="La próxima película de Marvel">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0 />
    <link
        rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
    
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="400" alt="Poster de <?= $data["title"]?>"
        style="border-radius: 16px"/>

    </section>

    <hgroup>
        <h1><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h1>
        <p span style="font-size: 22px;">Fecha de estreno <?= $data["release_date"] ?></p>
        <p>El tipo de Película es un <?= $data["type"]?></p>
        <p>La siguiente película a estrenar es <?= $data["following_production"]['title']?></p>
    </hgroup>

</main>

<style>
    :root{ 
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
        
    }
    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    img {
        display: flex;
        justify-content: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>