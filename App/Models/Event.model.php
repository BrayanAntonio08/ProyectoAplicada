<?php

class Eventmodel extends Model
{
    public function __construct() {
        //Se define la entidad que se trabajará en la BD
        parent::__construct('Event');
    }

    public function createEvent($title, $fecha){
        $data = [
            varchar($title),
            date($fecha)
        ];
        return $this->create($data);
    }

    public function getAllEvents(){
        return $this->getAll();
    }
}