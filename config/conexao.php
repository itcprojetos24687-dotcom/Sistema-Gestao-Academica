<?php 

    class Database{
        private $host = "127.0.0.1";
        private $db_name = "GestaoProfessor";
        private $user_name = "root!";
        private $password = "Malikdb123!";

        public $conn;

        public function getConnection(){
            $this->conn = null;

            try{
                $this->conn = new mysqli($this->host,$this->user_name,$this->password,$this->db_name);

                if($this->conn->connect_error){
                    throw new Exception("Erro de conexao: ".$this->conn->connect_error);
                }
            }catch(Exception $e){
                die("Falha na base de dados: ".$e->getMessage());
            }
            return $this->conn;
        }
    }   

?>