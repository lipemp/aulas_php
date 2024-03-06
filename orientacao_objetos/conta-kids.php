<?php

class ContaKids extends Conta {
    public $idade;
    public $idKids;
    public $contador;

    public function __construct($idadeParams, $idContaParams, $idKidsParams) {
        $this->idade = $idadeParams;
        $this->idKids = $idKidsParams;
        parent::__construct($idContaParams);
    }

    public function depositoKids($valorParams, $contaTitular) {
        $this->contador = $this->contador + 1;
        $this->deposito($valorParams + $contaTitular->mostrarSaldo());
    }

}