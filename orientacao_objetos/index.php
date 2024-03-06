<?php
require_once('./conta.php');
require_once('./conta-kids.php');
require_once('./user.php');
require_once('./funcionario.php');


$user1 = new User("123123", "teste@teste.com");

$funcionario1 = new Funcionario("Pedro","0001", "pedro@teste.com", "123123" );

$funcionario1->alterarSenhaFuncionario("55555");

var_dump($funcionario1);



