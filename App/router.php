<?php
if(session_status()==PHP_SESSION_NONE)session_start();

class Router
{
    private $controller;
    private $action;

    public function __construct()
    {
        $this->matchRoute();
    }

    public function matchRoute()
    {
        # Se obtienen los datos de la constante definida en config
        $url = explode('/', URL);

        # Se establece el nombre de controlador y acción (o valores por defecto)
        $this->controller = !empty($url[1]) ? $url[1] : 'Page'; // Establece el valor predeterminado
        define('CONTROLLER', $this->controller);

        $this->controller = $this->controller . 'Controller';
        $this->action = !empty($url[2]) ? $url[2] : 'Home';


        define('VIEW', $this->action);

        $ruta = __DIR__ . '/Controllers/' . $this->controller . '.php';
        if (!file_exists($ruta)) {
            trigger_error('No hay controlador para atender la petición', E_USER_ERROR);
        }
        require_once($ruta);
    }


    public function run()
    {

        $ClassName = $this->controller;
        $controller = new $ClassName();


        $method = $this->action;

        if (!method_exists($controller, $method)) {
            trigger_error('El controlador no puede atender esta solicitud', E_USER_ERROR);
            return;
        }
        $controller->$method();
    }

    public function redirect($url, $info = null)
    {
        $newURL = URL_PATH . $url;

        if (!is_null($info)) {
            $_SESSION['redirect-info'] = $info; //se guarda la información antes de redirigir la página
        }
        header('Location: ' . $newURL);
        exit;
    }
} // fin de clase

//Se define una constante general accesible a los diferentes
//objetos
define('ROUTER', new Router());