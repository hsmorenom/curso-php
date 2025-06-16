<?php
$name = "Miguel";
$isDev = true;
$age = 12;
$edad = 30;
$isOld = $age > 18;



//CONSTANTE
define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.png');

const NOMBRE = 'Miguel';

// aca se verifica que tipo de dato es la variable, existen 3 tipos pero la recomendble es in_int y sus variaciones para que esta info no se muestre cuando este en produccion
var_dump($age);
var_dump($isDev);
var_dump($name);
echo gettype($age);
echo gettype($isDev);
echo gettype($name);

is_int($age);
is_bool($isDev);
is_string($name);
$newAge = '39' + '1';

$output = "Hola  \"$name\" , tienes una edad de   $age, tienes \$5 pesos";
$outPutAgeMatch = match (true) {
    $edad < 2 => "Eres un bebe, $name",
    $edad < 10 => "Eres un niño, $name",
    $edad < 18 => "Eres un adolescente, $name",
    $edad < 30 => "Eres un adulto joven, $name",
    default => "Eres un adulto, $name ",
};

$bestLanguages = ["PHP", "Javascript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "Typescript";

$person = [
    "name" => "Miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["Python", "JavaScript", "PHP"],
];

$person["name"] = "Carla";
$person["languages"][] = "Java";
// Ternario
$outPutAge = $isOld
    ? 'Eres viejo'
    : ' Eres joven';
?>

<ul>
    <?php foreach ($bestLanguages as $key => $languages): ?>
        <li><?= $key . " " . $languages ?></li>
    <?php endforeach ?>
</ul>
<h2><?= $outPutAgeMatch ?></h2>


<?php
if ($isOld) {
    echo "<h2>Eres mayor de edad </h2>";
} elseif ($isDev) {
    echo "<h2>No eres viejo, pero eres dev</h2>";
} else {
    echo "<h3>Eres menor de edad</h3>";
}
?>















<!-- Cuando es una linea, se puede reemplazar el php y el echo por un simple igual despues de la interrogante -->
<!-- PHP reconoce un numero que esta en string de un entero, de hecho los puede sumar cuando estan en distintos tipos, sin embargo cuando se quiere concatenar, la sintaxis es mas sensible a estos cambios -->
<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
    <?= "Hola" . " " . $name . "<br>tu tienes " . $age ?>
    <?= $output ?>
</h1>
<br>
<h2>
    <?= $newAge . '1'; ?>
</h2>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>