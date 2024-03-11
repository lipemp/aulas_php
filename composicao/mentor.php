<?php 
require_once('./pessoa.php');

class Mentor extends Pessoa {
    public $codigo;
    public $nivel;

    public function __construct($nomeP, $sobreNomeP, $emailP, $nivelP) {
        $this->codigo = gerarCodigo();
        $this->nivel = $nivelP;

        parent::__construct($nomeP, $sobreNomeP, $emailP);
    }
}