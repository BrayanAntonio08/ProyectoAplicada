<?php
    class PageController extends Controller{

        private $view;

        public function __construct(){
        }

        public function Home(){

            $this->render([], 'site');
        }

        public function Mostrar()
        {
            ROUTER->redirect('/Authentication/login');
        }


    }