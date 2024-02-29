<?php

$frase = "Iniciamos o PHP!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start PHP</title>
</head>
<body>
    <h1><?php echo $frase ?></h1>
    <form action="action.php" method="post">
    <!-- action diz para onde o formulário enviar o user 
        após dar submit, sem action, a pagina recarrega -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="name">
        <label for="nome">Idade:</label>
        <input type="text" name="idade" id="age">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>