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
        require __DIR__ . "/../view/campo/index.php";
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
        header("Location: /git/Sistema-Gestao-Academica/public/campo");
    }

    public function update(){
        $campo = new Campo();
        $campo->setNome($_POST['name']);
        $this->model->atualizar($campo);
        header("Location: /git/Sistema-Gestao-Academica/public/campo");
        exit;

    }

    public function delete($codigo){
        $this->model->deletar($codigo);
        header("Location: /git/Sistema-Gestao-Academica/public/campo");
        exit;
    }


}

?>