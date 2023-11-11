<?php
    class PageController extends Controller{


        public function Home(){
            $sesionClosed = false; //!isset($_SESSION["user"])
            if($sesionClosed){
                ROUTER->redirect('/Authentication/login');
            }

            $this->render();
        }

        public function Mostrar()
        {
            ROUTER->redirect('/Authentication/login');
        }

        public function calendar() {
            $this->render();
        }

    }