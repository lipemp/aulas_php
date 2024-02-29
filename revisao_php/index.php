<?php

$listaCarros = array();

function cadastrarCarro($marca, $modelo) {
    global $listaCarros;
    // Global antes de uma variável indica que
    // queremos acessar aquela váriavel global
    array_push($listaCarros, array (
        "marca" => $marca,
        "modelo" => $modelo
    ));

    // a tag <pre> faz com que o que esteja entre ela
    // seja previamente identado

    //echo '<pre>'
    // var_dump($listaCarros)
    //echo '</pre>'
}

function listarCarros() {
    global $listaCarros;
    // Pegando variavel global
    
    foreach ($listaCarros as $key => $value) {
            // key = valor/posição da lista (neste caso 'modelo' ou 'marca')
            // * key não necessariamente é o índice, o valor associativo é passado na key.
            // value = valor desta key
        echo "<h3> Marca" .$value['marca']. "</h3>";
        // Acessando o valor de 'marca' deste associado (tipo objeto) da lista
        echo "<hr />";
        echo "<h3> Modelo" .$value['modelo']. "</h3>";
        echo "<hr />";
    }
}

function excluirCarro($modelo) {
    global $listaCarros;

    foreach ($listaCarros as $key => $value) {
        if ($value['modelo'] == $modelo) {
            unset($listaCarros[$key]);
            // Unset remove da lista a key mencionada, neste caso o modelo.
        }
    }
}

    cadastrarCarro("Ford", "Focus");
    cadastrarCarro("VW", "Nivus");
    cadastrarCarro("Fiat", "Uno");
    cadastrarCarro("Honda", "Civic");
    
    excluirCarro('ford');
    listarCarros()
?>