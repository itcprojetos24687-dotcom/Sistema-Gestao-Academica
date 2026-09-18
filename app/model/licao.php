<?php
Class Licao{
    private $codigo;
    private $data;
    private $hora_inicio;
    private $hora_fim;

    public function __construct($codigo, $data, $hora_inicio, $hora_fim){
        $this->codigo = $codigo;
        $this->data = $data;
        $this->hora_inicio = $hora_inicio;
        $this->hora_fim = $hora_fim;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getData(){
        return $this->data;
    }
    public function setData($data){
        $this->data = $data;
    }
    
    public function getHora_inicio(){
        return $this->hora_inicio;
    }
    public function setHora_inicio($hora_inicio){
        $this->hora_inicio = $hora_inicio;
    }

    public function getHora_fim(){
        return $this->hora_fim;
    }
    public function setHora_fim($hora_fim){
        $this->hora_fim = $hora_fim;
    }



    public function __toString(){
        return "Inscricao [codigo ={$this->codigo}, data={$this->data}, hora_inicio={$this->hora_inicio},hora_fim={$this->hora_fim} ]";
    }
}
?>
