<?php

class AdvertisementModel extends Model
{
    public function __construct() {
        //Se define la entidad que se trabajará en la BD
        parent::__construct('advertisement');
    }

    public function createAdvertisement($title, $description){
        $data = [
            varchar($title),
            varchar($description)
        ];
        return $this->create($data);
    }

    public function getAllAdvertisement(){
        return $this->getAll();
    }
}