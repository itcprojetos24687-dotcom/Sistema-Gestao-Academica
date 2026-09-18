<?php 

    class Formador{
        private $codigo;
        private $nome;
        private $apelido;
        private $email;
        private $genero;
        private $estadoCivil;
        private $contacto;
        private $salario;
        private $valor_horas;
        private $horas_mes;

        public function __construct($codigo, $nome, $apelido, $email, $genero, $estadoCivil, $contacto, $salario, $valor_horas,$horas_mes)
        {
            $this->codigo= $codigo;
            $this->nome=$nome;
            $this->apelido = $apelido;
            $this->email = $email;
            $this->genero = $genero;
            $this->contacto = $contacto;
            $this->salario = $salario;
            $this->valor_horas = $valor_horas;
            $this->horas_mes = $horas_mes;


        }

        public function getCodigo(){return $this->codigo;}
        public function setCodigo($codigo){return $this->codigo=$codigo;}

        public function getNome(){return $this->nome;}
        public function setNome($nome){return $this->nome=$nome;}

        public function getApelido(){return $this->apelido;}
        public function setApelido($apelido){return $this->apelido=$apelido;}

        public function getEmail(){return $this->email;}
        public function setEmail($email){return $this->email=$email;}

        public function getGenero(){return $this->genero;}
        public function setGenero($genero){return $this->genero=$genero;}

        public function getContacto(){return $this->contacto;}
        public function setContacto($contacto){return $this->contacto=$contacto;}

        public function getSalario(){return $this->salario;}
        public function setSalario($salario){return $this->salario=$salario;}

        public function getValor_horas(){return $this->valor_horas;}
        public function setValor_horas($valor_horas){return $this->valor_horas=$valor_horas;}

        public function getHoras_mes(){return $this->horas_mes;}
        public function setHoras_mes($horas_mes){return $this->horas_mes=$horas_mes;}
        



    }
?>