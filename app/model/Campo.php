<?php 

require_once __DIR__ .'/../../config/conexao.php';
    class Campo{
        private $codigo;
        private $nome;
        private $db;
        
        public function __construct()
        {
            // $this->codigo = $codigo;
            // $this->nome = $nome;
            $this->codigo;
            $this->nome ;
            $database = new Database();
            $this->db = $database->getConnection();
        }

        public function getCodigo(){return $this->codigo;}
        public function setCodigo($codigo){return $this->codigo=$codigo;}

        public function getNome(){return $this->nome;}
        public function setNome($nome){return $this->nome=$nome;}

        public function cadastrar($Campo){
            $query = "insert into Campo (nome) values (?)";
            $result = $this->db->prepare($query);
            $nome = $Campo->getNome();
            $result->bind_param("s",$nome);
            return $result->execute();
        }

        public function atualizar($Campo){
            $query = "update Campo set nome = {$Campo->getNome()} where codigo = {$Campo->getCodigo()}";
            $result = $this->db->query($query);
            
        }
        public function getAll(){
            $query = "select * from Campo";
            $result = $this->db->query($query);

            $campo = [];
            while($row = $result->fetch_assoc()){
                $campo[] = $row;
            }
            return $campo;
        }
        public function getById($codigo){
            $query = "select * from Campo where codigo = ".$codigo;
            $stmt = $this->db->query($query);

            return $stmt->fetch_assoc(); 
        }

        public function deletar($codigo){
            $query = "delete from Campo where codigo = ".$codigo;
            $result = $this->db->query($query);

            
        }
        

    }
?>