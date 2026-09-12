<?php
Class Perfil{
    private $id;
    private $nome;

    public function __construct($id, $nome){
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

public function setId($id){
    $this->id =$id;
}

public function getNome(){
    $this->nome;
}
public function setNome($nome){
    $this->nome = $nome;
}

public function __toString(){
    return "Perfil [id={$this->id}, nome={$this->nome}]";
}
}
?>