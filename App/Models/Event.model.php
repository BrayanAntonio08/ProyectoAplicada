<?php


class Eventmodel extends Model
{
    public function __construct()
    {
        //Se define la entidad que se trabajar� en la BD
        parent::__construct('event');
    }

    public function createEvent($title, $fecha)
    {
        $data = [
            varchar($title),
            sql_date($fecha)
        ];
        return $this->create($data);
    }

    public function getAllEvents()
    {
        $result = [];
        $events = $this->getAll();
        foreach ($events as $event) {
            $newEvent = [];
            $newEvent['id'] = $event['id'];
            $newEvent['name'] = $event['titulo'];
            $newEvent['date'] = $this->formatDate($event['fecha']);
            $newEvent['description'] = 'descripcion';
            $newEvent['type'] = 'event';
            $result[] = $newEvent;
        }
        return $result;
    }

    private function formatDate($date)
    {
        // Crea un objeto DateTime a partir de la cadena de fecha
        $fechaObj = new DateTime($date);//DateTime::createFromFormat('Y-m-d', $date);

        // Obtiene el nombre del mes y el día
        $nombreMes = $fechaObj->format('F'); // 'F' devuelve el nombre completo del mes
        $dia = $fechaObj->format('d');

        // Obtiene el año
        $anio = $fechaObj->format('Y');

        // Retorna el formato deseado
        return $nombreMes . '/' . $dia . '/' . $anio;

    }
}