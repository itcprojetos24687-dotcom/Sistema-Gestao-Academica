<?php

require __DIR__ . '/../model/Campo.php';

class CampoController{
    private $model;

    public function index(){
        $this->model = new Campo();
        $this->model->getAll();
        require __DIR__ . '/../view/home.php';
    }


}

?>