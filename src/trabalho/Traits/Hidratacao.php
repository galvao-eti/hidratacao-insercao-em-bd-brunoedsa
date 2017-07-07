<?php
namespace trabalho\Traits;

trait Hidratacao{
    public function salvarDados(array $obj){
       	foreach ( $obj as $key => $value ){
            $this->$key = $value;
        }
    }
}