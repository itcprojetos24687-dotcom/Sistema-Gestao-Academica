<?php 

class Router{
    public function run(){
        $url = $_GET['url'] ?? 'home/index';
        $url = explode('/', $url);

        $controllerName = ucfirst($url[0] ?? 'home') . 'Controller';
        $methodName = $url[1] ?? 'index';
        $id = $url[2] ?? null;
        
        $controllerFile = __DIR__ . '/../app/Controller/'. $controllerName .'.php' ;

        if(!file_exists($controllerFile)){
            http_response_code(404);
            echo "Ficheiro: {$controllerFile} nao encontrada";
            return;
            }
            
        require_once $controllerFile;
        if(!class_exists($controllerName)){
            http_response_code(404);
            echo " Classe :{$controllerName} nao encontrada";
            return;
            }
        $controller = new $controllerName();

        if(!method_exists($controller,$methodName)){
            http_response_code(404);
            echo " Metodo :{$methodName} nao encontrado";
            return;

        }
        $controller->$methodName();
    }
}
?>