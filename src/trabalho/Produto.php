<?php
namespace trabalho;

use trabalho\Conexao;

class Produto {
    private $nome;
    private $valor;

    public function getNome(){
        return $this->nome;
    }
    public function setNome ($nome){
        $this->nome = $nome;
    }    
    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    public function salvar($con){
        $sql = "INSERT INTO produto (nome, valor) VALUES(:nome, :valor)";
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(array(
            ':nome' => $this->nome,
            ':valor' => $this->valor
        ));
        return $result;
    }
    use Traits\Hidratacao;
}