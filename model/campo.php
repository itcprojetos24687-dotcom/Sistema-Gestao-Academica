<?php 

include './config/conexao.php';

    class Campo{
        private $codigo;
        private $nome;
        private $db;
        
        public function __construct($codigo, $nome)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $database = new Database();
            $this->db = $database->getConnection();
        }

        public function getCodigo(){return $this->codigo;}
        public function setCodigo($codigo){return $this->codigo=$codigo;}

        public function getNome(){return $this->nome;}
        public function setNome($nome){return $this->nome=$nome;}

        public function cadastrarCampo($Campo){
            $query = "insert into$ campo (nome) values (1)";
            $result = $this->db->prepare($query);
            $result->bind_param("s",$Campo->getNome);
            return $result->execute();
        }

        public function atualizarCampo($Campo){
            $query = "update campo set nome = ? where codigo = ?";
            $result = $this->db->prepare($query);
            $result->bind_param("si",$Campo->getNome,$Campo->getCodigo);
        }
        public function getAll(){
            $query = "select * from campo";
            $stmt = $this->db->prepare($query);
            $result = $stmt->get_result();

            $campo = [];
            while($row = $result->fetch_assoc()){
                $campo[] = $row;
            }
            return $campo;
        }
        public function getById($codigo){
            $query = "select * from campo where codigo = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("i",$codigo);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_assoc();
        }

        public function deletarCampo($Campo){
            $query = "delete from campo where codigo = ?";
            $result = $this->db->prepare($query);
            $result->bind_param("s",$Campo->getCodigo);

            return $result->execute();
        }
        

    }
?>