<?php 

abstract class User {
    private $senha;
    protected $login;

    public function __construct($senhaParams, $loginParams) {
        $this->login = $loginParams;
        $this->senha = $senhaParams;
    }

    private function alterarSenha($novaSenha) {
        $this->senha = $novaSenha;
    }

    protected function alterarSenhaUser($senhaParams){
        $this->alterarSenha($senhaParams);
    }

    public function mostrarSenha(){
        return $this->senha;
    }

    public function mostrarLogin(){
        return $this->login;
    }

    abstract public function logout();
}