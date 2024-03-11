<?php 

class Pessoa {
    public $nome;
    public $sobreNome;
    public $email;

    public function __construct($nomeP,$sobreNomeP, $emailP) {
        $this->nome = $nomeP;
        $this->sobreNome = $sobreNomeP;
        $this->email= $emailP;
    }
}