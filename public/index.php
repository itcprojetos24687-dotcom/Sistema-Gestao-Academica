<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));

    require_once __DIR__ . '/../core/Router.php';

    $router = new Router();

    $router->run();

?>