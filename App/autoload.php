<?php
    //Se importa la configuración para e correcto desarrollo
    require_once(__DIR__.'/config.php');

    require_once(__DIR__.'/Core/Controller.php');
    require_once(__DIR__.'/Core/Model.php');

    //Se habilitan las rutas en el proyecto
    //NOTA: Siempre se debe llamar primero a config, o de otro 
    //modo el router no podrá leer las rutas
    require_once(__DIR__.'/router.php');

    