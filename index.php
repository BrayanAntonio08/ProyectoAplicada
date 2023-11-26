<?php
    
    require_once(__DIR__.'/App/autoload.php');
    
    /*
    Después de que se cargan los elementos
    se hace un llamado al router para que 
    atienda la peticion
    */
    $router = new Router();
    $router->run();

