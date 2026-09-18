<?php 
    class Coordenador{
        private $formador;

        public function __construct($formador)
        {
            $this->formador = $formador;
        }

        public function getFormador(){return $this->formador;}
        public function setFormador($formador){return $this->formador = $formador;}
    }
?>