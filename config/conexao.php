<?php 
    define("hostname", "127.0.0.1");
    define("username","root");
    define("password","Malikdb123!");
    define("Database","Estacionamento");

    $conexao = mysqli_connect(hostname,username,password,Database);

    if(mysqli_connect_error()){
        die("Erro ao conectar a base de dados ".mysqli_connect_error()."(".mysqli_connect_error().")");
    }else{

        $sql = "select current_user;";
        $row = mysqli_query($conexao,$sql);

        if($row){
            $carros = array();
        
            while($rs=mysqli_fetch_assoc($row)){
                //array_push($carros,$rs);
                echo $rs["current_user"];
                echo "Nome: {$rs["marca"]} <br>"; 
                echo "Nome: {$rs["modelo"]} <br>";
                echo "Nome: {$rs["matricula"]} <br>";  


            }

            
        }
    
    }   

?>