<?php

class PageController extends Controller
{

    public function Home()
    {

        if (        !isset($_SESSION["user"])) {
            $this->redirect('/Authentication/login');
        }

        $data = array();

        if (isset($_SESSION['redirect-info'])) {
            $info = $_SESSION['redirect-info'];
            foreach ($info as $key => $value) {
                $data[$key] = $value;
            }
            unset($_SESSION['redirect-info']);
        }

        require_once(MODEL_PATH . 'Advertisement.model.php');
        $adModel = new AdvertisementModel();
        $data["anuncios"] = $adModel->getAllAdvertisement();

        $this->render('', $data);
    }

    public function Mostrar()
    {
               
        $this->redirect('/Authentication/login');
    }

    public function calendar()
    {
        $data = array();

        if (isset($_SESSION['redirect-info'])) {
            $info = $_SESSION['redirect-info'];
            foreach ($info as $key => $value) {
                $data[$key] = $value;
            }
            unset($_SESSION['redirect-info']);
        }

        require_once(MODEL_PATH . 'Event.model.php') ;
        $eventModel = new Eventmodel();
        $data['eventos'] = $eventModel->getAllEvents();

        Console::log('Cargando eventos');
        
        $this->render('', $data);
    }

}