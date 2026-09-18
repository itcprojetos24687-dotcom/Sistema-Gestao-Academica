<?php
class Matricula {
    private $codigo;
    private $data_matricula;

  
    public function __construct($codigo = null, $data_matricula = null) {
        $this->codigo = $codigo;
        $this->data_matricula = $data_matricula;
    }

    public function getCodigo() { 
        return $this->codigo; 
    }
    
    public function setCodigo($codigo) { 
        $this->codigo = $codigo; 
    }

    public function getData_matricula() { 
        return $this->data_matricula; 
    }
    
    public function setData_matricula($data_matricula) { 
        $this->data_matricula = $data_matricula; 
    }

  

    public function __toString() {
        return "Matricula [codigo={$this->codigo}, data_matricula={this->data_matricula}]";
    }
}
?>
