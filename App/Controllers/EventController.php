<?php

require_once(MODEL_PATH."Event.model.php");
class EventController extends Controller
{

    /**
     * Is call from the view and it calls the model function to create an advertisement.
     * At the end it redirects the page to home, where the ads are shown
     */
    public function Create()
    {
        //obtener los datos
        $title = $_POST["title_param"];
        $fecha = $_POST["date_param"];

        //logica para crear un anuncio
        $model = new EventModel();
        $error = $model->createEvent($title, $fecha);

        $info = array();
        if ($error == 0) {
            $info['mensaje'] = 'Fallo al crear el anuncio';
        }else{
            $info['mensaje'] = 'Registro exitoso';
        }

        $this->redirect('/Page/Calendar', $info);
    }
}