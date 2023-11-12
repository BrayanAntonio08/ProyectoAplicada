<?php
    class Controller{
       

        protected function renderView($viewDefinition = '', $layout = '', $data = array()){

            $viewDefinition .= empty($viewDefinition)? 'Page/Home.view.php':'.view.php';
            $viewPath = __DIR__.'/../Views/'.$viewDefinition;

            if(!file_exists($viewPath)){
                $msg = 'La vista que se busca no existe';
                trigger_error($msg,E_USER_ERROR);
                return;
            }//se comprueba que la vista sí existe


            $pageLayout = empty($layout)? 'basic':$layout;
            $pageLayout .= '.layout.php';
            $pageLayoutPath = __DIR__.'/../Views/Layouts/'.$pageLayout;
            

            if(!file_exists($pageLayoutPath)){
                $msg = 'No hay una plantilla que despliegue la información que busca';
                trigger_error($msg,E_USER_ERROR);
                return;
            }//validar que la página de layout existe


            $page = __DIR__.'/../page.php';
            include_once($page);
        }
        
        protected function render($layout = '', $data = []){
            //Se obtiene la tura del archivo, sique la lógica [Controlador/accion.view]
            $view = VIEW.'.view.php';
            $viewPath = __DIR__.'/../Views/'.CONTROLLER.'/'.$view;

            if(!file_exists($viewPath)){
                $msg = 'La vista que se busca no existe';
                trigger_error($msg,E_USER_ERROR);
                return;
            }//se comprueba que la vista sí existe


            $pageLayout = empty($layout)? 'basic':$layout;
            $pageLayout .= '.layout.php';
            $pageLayoutPath = __DIR__.'/../Views/Layouts/'.$pageLayout;
            

            if(!file_exists($pageLayoutPath)){
                $msg = 'No hay una plantilla que despliegue la información que busca';
                trigger_error($msg,E_USER_ERROR);
                return;
            }//validar que la página de layout existe


            $page = __DIR__.'/../page.php';
            include_once($page);
        }
    }