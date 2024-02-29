<?php 

require('./animal.php');
require('./cachorro.php');

$animal = new Animal("carnívoro", "dinossauro", false);
$animal2 = new Animal("herbívoro", "ave", true);

echo $animal->tipo;
echo "<br/>";
echo var_dump($animal->voa);
echo "<br/>";
echo $animal->especie;
echo "<br/>";

$animal->voar();

$animal2->voar();

// $nomeDoCachorro = new Cachorro("nomeDoCachorro");

echo  $nomeDoCachorro->mostrarDetalhe();