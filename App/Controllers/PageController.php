<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

class PageController extends Controller
{


    public function Home()
    {
        $sesionClosed = false; //!isset($_SESSION["user"])
        if ($sesionClosed) {
            ROUTER->redirect('/Authentication/login');
        }

        $data = array();

        if (isset($_SESSION['redirect-info'])) {
            $info = $_SESSION['redirect-info'];
            foreach ($info as $key => $value) {
                $data[$key] = $value;
            }
        }

        require_once(MODEL_PATH . 'Advertisement.model.php');
        $adModel = new AdvertisementModel();
        $data["anuncios"] = $adModel->getAllAdvertisement();
        
        $this->render('', $data);
    }

    public function Mostrar()
    {
        ROUTER->redirect('/Authentication/login');
    }

    public function calendar()
    {
        $this->render();
    }

}