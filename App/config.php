<?php
#Se obtiene el nombre de la carpeta 
$folderPath = dirname($_SERVER['SCRIPT_NAME']);
#Se debe leer el contenido de la ruta para procesarlo después
$urlPath = $_SERVER['REQUEST_URI'];
#Se extrae la ruta a trabajar, que contiene el controlador y la acción
$url = substr($urlPath, strlen($folderPath));

#se declara una constante
define('URL', $url); //guarda la ruta actual del navegador
define('URL_PATH', $folderPath); //Define el nombre de la carpeta del proyecto
define('PUBLIC_PATH', __DIR__ . '/../Public'); //guarda la dirección completa del directorio hasta public


#Nombres de rutas de las carpetas
define('VIEW_PATH', __DIR__ . '/Views/');
define('MODEL_PATH', __DIR__ . '/Models/');
define('CONTROLLER_PATH', __DIR__ . '/Controllers/');
define('CORE_PATH', __DIR__ . '/Core/');
define('SERVICES_PATH', __DIR__ . '/Services/');


#Definir variables para la conexión a base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_futcalendar');
define('DB_USER', 'root');
define('DB_PASS', '');

function ROUTE($controller, $action) : string {
    return URL_PATH .'/'. strtolower($controller) .'/'. strtolower($action);
}