<?php

class Contador {

     public $contador;

    public function zerar() {
        $this -> contador = 0;
        echo 'O valor foi zerado!';
    }

    public function incrementar() {
        $this -> contador += 1;
        echo 'O valor foi incrementado! </br>';
    } 

    public function valorContador() {
        echo "</br> Valor do contador é: $this->contador";
    }

}

?>