<?php


class Eventmodel extends Model
{
    public function __construct() {
        //Se define la entidad que se trabajar� en la BD
        parent::__construct('event');
    }

    public function createEvent($title, $fecha){
        $data = [
            varchar($title),
            sql_date($fecha)
        ];
        return $this->create($data);
    }

    public function getAllEvents(){
        return $this->getAll();
    }
}