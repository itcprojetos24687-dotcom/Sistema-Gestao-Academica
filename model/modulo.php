
<?php
class Modulo{
    private $codigo;
    private $nome;
    private $carga_horaria;
    
    public function __construct($codigo,$nome, $carga_horaria ){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->carga_horaria = $carga_horaria; 
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNome(){
        return $this->codigo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCarga_horaria(){
        return $this->carga_horaria;
    }

    public function setCarga_horaria($carga_horaria){
        $this->carga_horaria = $carga_horaria;
    }

    public function toString(){
        return "Modulo [codigo={$this->codigo}, nome={$this->nome},carga_horaria={$this->carga_horaria} ]";
    }

}
?>