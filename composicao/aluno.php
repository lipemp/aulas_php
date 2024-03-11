<?php
require_once('./pessoa.php');

class Aluno extends Pessoa {
    public $codigo;

    public function __construct($nomeP, $sobreNomeP, $emailP) {
        $this->codigo = gerarCodigo();

        parent::__construct($nomeP, $sobreNomeP, $emailP);
    }
}