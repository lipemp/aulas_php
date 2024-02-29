<?php
    // Exercício 01
    echo '<h2> Exercício 01 </h2>';
    $resultado = array();

    $num1 = 7;
    $num2 = 8;

    function calcularMedia($num1, $num2) {
        global $resultado;

        $media = ($num1 + $num2) / 2;
        $aprovado = false;

        if ($media >= 6) {
            $aprovado = true;
        }

        array_push($resultado, array(
            'media' => $media,
            'aprovado?' => $aprovado
        ));
    }
    calcularMedia($num1, $num2);
    var_dump($resultado);

    echo "<br/><br/><br/>";

    // Exercício 02
    echo '<h2> Exercício 02 </h2>';

    $notaPeso = array(
        [
            'nota' => 1,
            'peso' => 1
        ],
        [
            'nota' => 1,
            'peso' => 1
        ],
        [
            'nota' => 1,
            'peso' => 10
        ]
    );

    $mediaFinal = 0;

    function calcularPesoNota($lista) {
        global $mediaFinal;

        $multiplicacao = 0;

        foreach ($lista as $key => $value) {
            $multiplicacao += $value['nota'] * $value['peso'];

        }

        return $mediaFinal = $multiplicacao / count($lista);

    }

    calcularPesoNota($notaPeso);
    echo $mediaFinal;

    echo "<br/><br/><br/>";
    // Exercício 03
    echo '<h2> Exercício 03 </h2>';

    $listaProdutos = array();

    function cadastrarProduto($nome, $preco) {
        global $listaProdutos;

        array_push($listaProdutos, array(
            "nome" => $nome,
            "preco" => $preco
        ));
    }

    function listarProdutos() {
        global $listaProdutos;

        foreach ($listaProdutos as $key => $value) {
            echo "<h5> Nome:" . $value['nome'] . "</h5>";
            echo "<h5> Preço: R$" . $value['preco'] . "</h5>";
            echo "<hr/>";
        }
    }

    function excluirProduto($nome) {
        global $listaProdutos;

        foreach ($listaProdutos as $key => $value) {
            if ($value['nome'] == $nome) {
                unset($listaProdutos[$key]);
            }
        }
    }

    cadastrarProduto("Banana", 3);
    cadastrarProduto("Abacaxi", 5);
    cadastrarProduto("Laranja", 12);
    
    listarProdutos();
    echo "<h3> Excluindo produtos </h3>";
    excluirProduto('Abacaxi');
    listarProdutos()
?>