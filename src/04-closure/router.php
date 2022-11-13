<?php 

class Router {
    private $routes;
    private $charset = 'UTF-8'; 
    private $contentType = 'text/html'; 

    public function addRoute($path, \Closure $closure) {
        $this->routes[$path] = $closure->bindTO($this,__CLASS__); 
    } 

    public function dispatch($currentPath){
        foreach($this->routes as $path => $clos) {
            if ($currentPath === $path){
                $clos(); 
            }
        }

        header('ContentType:'.$this->contentType); 
        echo 'Pagina sobre';  
    }
}