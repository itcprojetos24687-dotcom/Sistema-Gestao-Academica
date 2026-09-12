<?php

class Logs{
 private $codigo;

    public function __construct($codigo){
        $this->codigo = $codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function __toString(){
        return "Inscricao [codigo ={$this->codigo}]";
    }
}
?>