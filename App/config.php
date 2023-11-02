<?php
    #Se obtiene el nombre de la carpeta 
    $folderPath = dirname($_SERVER['SCRIPT_NAME']);
    #Se debe leer el contenido de la ruta para procesarlo después
    $urlPath = $_SERVER['REQUEST_URI'];
    #Se extrae la ruta a trabajar, que contiene el controlador y la acción
    $url = substr($urlPath, strlen($folderPath));

    #se declara una constante
    define('URL', $url); //guarda la ruta actual
    define('PUBLIC_PATH', __DIR__ .'/../Public'); //guarda la dirección completa del directorio hasta public
    define('URL_PATH', $folderPath);//Define el nombre de la carpeta del proyecto
    
