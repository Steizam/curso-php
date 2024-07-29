<?php

declare(strict_types=1); // <- a nivel de archivo y arriba del todo hacer que se php no asigne tipado aleatorio 

function render_template(string $template, array $data = [])
{
  extract($data); // extrae las variables del array asociativo y las deja a nivel funcion para su uso.
  require "templates/$template.php"; //indicamos mediante la variable $template el nombre del fichero que queremos incluir 
}

function get_data(string $url): array
{
  $result = file_get_contents($url); // si solo quieres hacer un GET de una API
  $data = json_decode($result, true); // extramos los datos a un objeto json para poder trabajar con ellos
  return $data;
}

function get_until_message(int $days): string
{
  return match (true) {
    $days === 0    => "¡Hoy se estrena! 🥳",
    $days === 1    => "Mañana se estrena 🚀",
    $days < 7      => "Esta semana se estrena 🫢",
    $days < 30     => "Este mes se estrena... 🗓️",
    default        => "$days días hasta el estreno 🗓️",
  };
}
