<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../model/Campo.php';

$model = new Campo();
$campos = $model->getAll();

echo "<pre>";
var_dump($campos);
echo "</pre>";