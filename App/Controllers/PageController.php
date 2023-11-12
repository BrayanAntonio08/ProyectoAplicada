<?php
    class PageController extends Controller{


        public function Home(){
            $sesionClosed = false; //!isset($_SESSION["user"])
            if($sesionClosed){
                ROUTER->redirect('/Authentication/login');
            }

            require_once(MODEL_PATH.'User.model.php');
            $model = new UserModel();
            $data = [
                "users"=>$model->getAll()
            ];
            $this->render('', $data);
        }

        public function Mostrar()
        {
            ROUTER->redirect('/Authentication/login');
        }


    }