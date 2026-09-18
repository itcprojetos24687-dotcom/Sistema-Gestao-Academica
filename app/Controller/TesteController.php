<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../model/Campo.php';
class TesteController{
    public function edit($codigo){
        $model = new Campo();

        $campos = $model->getById($codigo);
        echo $campos['nome'];   
    }
    public function delete($codigo){
        $model = new Campo();
        $model->deletar($codigo);
        header("Location: ".BASE_URL."/campo");
        exit;
    }
    

}
    


// echo BASE_URL;

// echo "<pre>";
// var_dump($campos);
// echo "</pre>";