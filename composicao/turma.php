<?php 

class Turma {
    public $codigo;
    public $nome;
    public $sala;
    public $status;
    protected $alunos;

    public function __construct($nomeParams, $salaParams, $status = "Aberta") {
        $this->codigo = gerarCodigo(1, 100);
        $this->alunos = array();
        $this->nome = $nomeParams;
        $this->sala = $salaParams;
        $this->status = $status;
    }

    public function adicionarAluno(...$data){

        //IDEIA 2 - ESPRED DIRETO NO PARAMETRO
        $this->alunos = [...$this->alunos, ...$data];

        //IDEIA 1
        /*if(is_array($data)){
            foreach ($data as $aluno) {
                array_push($this->alunos, $aluno);
            }
        } else {
            array_push($this->alunos, $data);
        }*/
    }

    public function listarAlunos(){
        echo "Lista de alunos - Turma ". $this->codigo;
        echo "<hr/>";

        foreach ($this->alunos as $aluno) {
            echo "Cód.:" . $aluno->codigo . "<br/>";
            echo "Nome:" . $aluno->nome . "<br/>";
            echo "E-mail:" . $aluno->email . "<br/>";
            echo "<hr/>";
        }
    }
}