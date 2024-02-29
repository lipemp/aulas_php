<?php
$desempenhoAluno = array();

function media($nota1, $nota2) {
    global $desempenhoAluno;
    $media = ($nota1 + $nota2) / 2;
    $aprovado = false;

    if ($media >= 6) {
        $aprovado = true;
    }

    array_push($desempenhoAluno, array(
        'media' => $media,
        'aprovado' => $aprovado
    ));    
}

media(8, 5);

var_dump($desempenhoAluno)

?>