<?php

require_once(MODEL_PATH."Advertisement.model.php");
class AdvertisementController extends Controller
{

    /**
     * Is call from the view and it calls the model function to create an advertisement.
     * At the end it redirects the page to home, where the ads are shown
     */
    public function Create()
    {
        //obtener los datos
        $title = $_POST["title"];
        $description = $_POST["description"];

        //logica para crear un anuncio
        $model = new AdvertisementModel();
        $error = $model->createAdvertisement($title, $description);

        $info = array();
        if ($error == 0) {
            $info['mensaje'] = 'Fallo al crear el anuncio';
        }else{
            $info['mensaje'] = 'Registro exitoso';
        }

        $this->redirect('/Page/Home', $info);
    }
}