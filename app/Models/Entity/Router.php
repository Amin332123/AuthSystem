<?php
namespace Oliver\AuthSystem\Models\Entity;
// use pageController;
use Oliver\AuthSystem\Controllers\pageController;

use Oliver\AuthSystem\Controllers\SignupController;
// include_once "app/Controllers/signupController.php";
class Router
{
    private $routes = [];
    public function add($path, $callback)
    {
        $this->routes[$path] = $callback;
    }
    public function dispatch($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            $action = $this->routes[$uri];
            $controller = $action[0];
            $method = $action[1];
           
            $className = 'Oliver\\AuthSystem\\Controllers\\'.$controller; 
    
            
            // var_dump($controller, class_exists($className));
           

            $obj = new $className();
             
           
            $obj->$method();

        } else {
            http_response_code(404);
            echo "this file not found";
        }
    }
}