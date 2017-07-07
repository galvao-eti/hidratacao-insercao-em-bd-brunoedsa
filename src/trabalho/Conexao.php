<?php

namespace trabalho;

class Conexao{
    public function conectar() {
        $dsn = 'mysql:dbname=trabalho_pos_2017;host=localhost';
        $dbn = new \PDO($dsn, 'root', 'mysql');
        return $dbn;
    }
}