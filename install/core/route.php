<?php
class Route
{
    static function start()
    {
        try {
            $controller_name = 'Step_1';
            $action_name = 'index';
            
            if(isset($_GET['route'])){
                $routes = explode('/', $_GET['route']);
            }
            
            if (!empty($routes[0])) {
                $controller_name = $routes[0];
            }
            
            if (!empty($routes[1])) {
                $action_name = $routes[1];
            }
            
            $model_name = 'Model'.$controller_name;
            $controller_name = 'Controller'.$controller_name;
            $action_name = 'action_'.$action_name;

            $model_path = "models/" . $model_name . ".php";
            if(file_exists($model_path)) {
                require_once $model_path;
            }
            
            $controller_path = "controllers/" . $controller_name . ".php";
            if(file_exists($controller_path)) {
                require_once $controller_path;
            } else {
                throw new Exception("File <b>" . $controller_path . "</b> was not found!");
            }
            
            $controller = new $controller_name;
            $action = $action_name;
            
            if(method_exists($controller, $action)) {
                $controller->$action();
            } else {
                throw new Exception("Method <b>" . $action . "</b> was not found!");
            }
            
        } catch(Exception $e) {
            echo "Exception on line " . $e->getLine() . " file " . $e->getFile() . ". Message \"" . $e->getMessage() . "\"";
        }
    }
}