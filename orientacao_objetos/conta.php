<?php

class Conta{
    protected $id;
    protected $saldo;
    protected $credito;

    public function __construct($idParams, $creditoParams = 0,  $saldoParams = 0) {
        $this->id = $idParams;
        $this->saldo = $saldoParams;
        $this->credito = $creditoParams;
    }

    //EXEMPLO DE ENCAPSULAMENTO
    public function deposito($valorParams){
        $this->saldo = $this->saldo + $valorParams;
    }

  

    //EXEMPLO DE ENCAPSULAMENTO
    public function getCredito(){
        return $this->credito;
    }

    //EXEMPLO DE ENCAPSULAMENTO
    public function setCredito($creditoParams){
        $this->credito = $this->credito + $creditoParams;
    }

    public function getId(){
        return $this->id;
    }

    public function mostrarSaldo(){
        return $this->saldo;
    }
}