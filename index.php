<?php 

$name = "Miguel"; //variable
$isDev = true;
$age = 25;

$isOld = $age > 40;

if ($isOld) {
    echo "<h2>Eres viejo, lo siento </h2>";
}elseif ($isDev){
    echo "<h2>No eres viejo, pero eres dev  </h2>";
}else {
    echo "<h2>Eres joven, aprovecha!! </h2>";
}


define('LOGO_URL', 'https://www.php.net/images/logos/php-logo-white.svg'); //definición de constante global



$output = "Hola $name, con una edad de $age"; 



const NOMBRE = 'Miguel'; //No es necesario poner simbolo dolar en constantes;

//otra forma usando match
$outputAge = match (true){
    $age < 2    => "Eres un bebé, $name",
    $age < 10   => "Eres un niño, $name",
    $age < 18   => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age < 40   => "Eres un adulto joven, $name",
    $age >= 40  => "Eres un adulto viejo, $name",
    default     => "Eres muy mayor. $name",
};

$bestLanguages = ['PHP', 'JavaScript','Python', 'Angular'];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
    'name' => 'Miguel',
    'age' => 25,
    'isDev' => true,
    'languages' => ["PHP", "JavaScript", "Python"],
];
$person["name"] = "pheralb";
$person["languages"][] = "Java";


?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) :?>
        <li><?= $key . " " .  $language ?></li>
    <?php endforeach;?>
</ul>

<h2><?= $outputAge ?></h2>

<?php if ($isOld) : ?>
    <h2> Eres viejo, lo siento </h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev. Estás jodido</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>




<img src="<?=LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
<?= NOMBRE //ejemplo de mostrar constante ?> 
</h1>



<h1>
<?= "La primera APP en PHP5"; // otra forma de lanzar un echo php ?> 
</h1>


<h1>
<?= "Mi nombre es " . $name . " y mi edad es " . $age //ejemplo de concatenacion ?> 
</h1>


<?= $name //ejemplo de mostrar variable ?>



<style>
    :root{ 
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
        
    }
</style>