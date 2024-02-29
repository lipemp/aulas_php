<?php
if(!session_id()) { // Verificando se há uma sessão, caso não, ela inicia/cria
    session_start();
}

if (!isset($_SESSION['lista'])){ //Verificando se a lista já foi setada/criada (is set)
    var_dump('Criando lista...');
    $_SESSION['lista'] = array();
}

$nome = $_POST['nome']; // Recebendo de post o name="nome" do dado
$idade = $_POST['idade']; // Recebendo de post o name="idade" do dado

$pessoa = array(
    "nome" => $nome,
    "idade" => $idade
);

array_push($_SESSION['lista'], $pessoa); 
// Procurando na _SESSION e acessando a 'lista' para incluir $pessoa

var_dump($_SESSION['lista']); // mostrar lista na sessão
// session_destroy() // Destrói a sessão, perdemos os dados
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./reset.php">Limpar PHP</a>
</body>
</html>