<?php

class ReforcoAula{
    public $codigo;
    public $mentor;
    public $aluno;

    public function __construct($alunoP, $mentorP) {
        $this->codigo = gerarCodigo();
        $this->aluno = $alunoP;
        $this->mentor = $mentorP;
    }
}