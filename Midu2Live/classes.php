<?php

declare(strict_types=1); // forzamos los tipos estrictos y que php no le asigne el que crea que es.

class SuperHero
{
  // promoted properties -> PHP 8 exclusivo . Definir propiedades en el constructor
  public function __construct(
    private string $name, // crea y asigna las propiedades this--> $name 
    public array $powers,
    public string $planet
  ) {
  }

  public function attack()
  {
    return "¡$this->name ataca con sus poderes!";
  }

  public function show_all()
  {
    return get_object_vars($this);
  }

  public function description()
  {
    $powers = implode(", ", $this->powers); // convertir un array en una cadena de texto. 

    return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
  }

  public static function random() // random = elemento aleatorio
  {
    $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
    $powers = [
      ["Superfuerza", "Volar", "Rayos láser"],
      ["Superfuerza", "Super agilidad", "Telarañas"],
      ["Regeneración", "Superfuerza", "Garras de adamantium"],
      ["Superfuerza", "Volar", "Rayos láser"],
      ["Superfuerza", "Super agilidad", "Cambio de tamaño"],
    ];
    $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

    $name = $names[array_rand($names)]; // array_rand devuelve un índice aleatorio del array, no el valor.
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    return new self($name, $power, $planet);
  }
}

// estático
$hero = SuperHero::random(); // :: Acceso a métodos estáticos
echo $hero->description();
