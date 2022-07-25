<?php 

require_once 'router.php'; 

$router = new Router; 
$router->addRoute('/sobre', function () 
{
    $this->$charset = 'ISO-9881'; 
    $this-> $contentType = 'text/plan'; 
}); 

$router->dispatch('/sobre');