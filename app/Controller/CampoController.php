<?php

require __DIR__ . '/../model/Campo.php';

class CampoController{
    private $model;

    public function __construct()
    {
        $this->model = new Campo();
    }

    public function index(){
        $campos = $this->model->getAll();
        require __DIR__ . "/../view/campo/show.php";
    }

    public function edit($codigo){
        $campo = $this->model->getById($codigo);
        require __DIR__ . "/../view/campo/edit.php";
    }

    public function create(){
        require( __DIR__ . "/../view/campo/create.php");
    }

    public function store(){
        $campo = new campo();
        $campo->setNome($_POST['nome']);
        $stmt = $this->model->cadastrar($campo);
        header("Location: ".BASE_URL."/campo/index");
    }

    public function update($codigo){
        $campo = new Campo();
        $campo->setNome($_POST['nome']);
        $campo->setCodigo($codigo);
        $this->model->atualizar($campo);
        header("Location: ".BASE_URL."/campo");
        exit;

    }

    public function delete($codigo){
        $this->model->deletar($codigo);
        header("Location: ".BASE_URL."/campo");
        exit;
    }


}

?>