<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

$cachorro = new Cachorro('Snoopy', 2, 'Caramelo');
$cachorro->mostrarNome();
$cachorro->latir();

echo "<br><br>";

$gato = new Gato('Merida', 4, 'Laranja');
$gato->mostrarNome();
$gato->miar();

?>