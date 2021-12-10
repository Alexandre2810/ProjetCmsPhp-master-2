<?php
    session_start();

    require './vendor/autoload.php';

    use App\Router\Router;

    $router = new Router();
    $controller = $router->getController();
    
    
    
?>   
