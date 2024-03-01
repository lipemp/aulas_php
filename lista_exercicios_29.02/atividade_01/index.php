<?php

require('contador.php');

$meuContador = new Contador();

$meuContador -> incrementar();
$meuContador -> incrementar();
$meuContador -> incrementar();
$meuContador -> incrementar();

$meuContador -> valorContador();

?>