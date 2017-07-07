<?php
namespace trabalho;

use trabalho\Conexao;

class Usuario{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function salvar($con){
        $sql = "INSERT INTO usuario (email, senha) VALUES(:email, :senha)";
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(array(
            ':email' => $this->email,
            ':senha' => $this->senha
        ));
        return $result;
    }

    use Traits\Hidratacao;
}