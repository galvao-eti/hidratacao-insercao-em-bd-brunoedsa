<?php
require 'autoload.php';

use trabalho\Usuario;
use trabalho\Produto;
use trabalho\Conexao;

$con = new Conexao();
$usuario = new Usuario();
$produto = new Produto();

$usuario->salvarDados(array("email" => "exemplo@email.com", "senha" => "123456"));
$produto->salvarDados(array("nome" => "Alicate", "valor" => "20.00"));

if ( $usuario->salvar($con->conectar())){
    echo "Usuario cadastrado com sucesso<br>";
}else{
    echo "Usuario ja existe<br>";
}
if ( $produto->salvar($con->conectar())){
    echo "Produto cadastrado com sucesso";
}else{
    echo "Produto ja existe";
}