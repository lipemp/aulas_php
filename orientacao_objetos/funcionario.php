<?php 

class Funcionario extends User {
    protected $cracha;
    public $nome;

    public function __construct($nomeParams, $crachaParams, $loginParams, $senhaParams) {
        $this->cracha = $crachaParams;
        $this->nome = $nomeParams;

        parent::__construct($senhaParams, $loginParams);
    }

    public function getCracha(){
        return $this->cracha;
    }

    public function mostrarUsuario(){
        echo $this->login;
    }

    public function alterarSenhaFuncionario($senhaParams) {
        $this->alterarSenhaUser($senhaParams);
    }

    public function logout() {
        echo "saiu do sistema...";
    }
}