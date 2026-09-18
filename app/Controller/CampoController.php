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
        require (__DIR__ . "../../view/home.php");
    }

    public function edit($codigo){
        $campo = $this->model->getById($codigo);
        require __DIR__ . "../../view/editCampo.php";
    }

    public function create(){
        require( __DIR__ . "../../view/createCampo.php");
    }

    public function store($campo){
        $stmt = $this->model->cadastrar($campo);
        header("Location: __DIR__ . ../../view/campo");
    }

    public function update($campo){
        $this->model->atualizar($campo);
        header("Location: __DIR__ . ../../view/campo");

    }

    public function delete($codigo){
        $this->model->deletar($codigo);
        header("Location: __DIR__ . ../../view/campo");
    }


}

?>