<?php

declare(strict_types=1); //deshabilita a php a convertir tipos de datos <.. a nivel de archivo y arriba del todo

const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data(string $url) : array  // Función que recibe una URL y devuelve un array asoci
{
    $result = file_get_contents($url); // si solo quieres hacer un GET de una API
    $data = json_decode($result, true); // lo convertimos a un array asociativo para acceder a los datos
    return $data;
}

function get_until_message(int $days) : string 
{
    return match (true){
        $days === 0 => "¡Hoy se estrena!",
        $days === 1 => "Mañana se estrena",
        $days < 7   => "Esta semana se estrena",
        $days < 30  => "Este mes se estrena...",
        default     => "$days hasta el estreno",
    }; 
}

$data = get_data($url);
$untilMessage = get_until_message($data["days_until"]);

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
        <h1><?= $data["title"]; ?> <?= $untilMessage ?></h1>
        <p span style="font-size: 22px;">Fecha de estreno <?= $data["release_date"] ?></p>
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
