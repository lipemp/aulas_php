<?php

abstract class Animal {
    public $tipo;
    public $especie;
    public $voa;

    public function __construct($tipo, $especie, $voa) {
        $this->tipo = $tipo;
        $this->especie = $especie;
        $this->voa = $voa;
    }

    public function voar() {
        if($this->voa){

            echo "Voando...";
        } else {
            echo "Este animal não voa.";
        }
    }

    public function mostrarDetalhe() {
        $voa = "Sim";

        echo "<br/>";
        echo "Detalhe do meu animal";
        echo "<hr/>";
        echo "Tipo: " . $this->tipo;
        echo "<br/>";
        echo "Especie: " . $this->especie;
        echo "<br/>";

        if(!$this->voa){
            echo "Voa: Não"; 
            echo "<br/>";
            return;
        }

        echo "Voa: " . $voa;
        echo "<br/>";

    }

    abstract public function latir();


}