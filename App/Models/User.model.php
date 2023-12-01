<?php

class UserModel extends Model
{
    public function __construct() {
        //Se define la entidad que se trabajar� en la BD
        parent::__construct('user');
    }

    public function createUser($title, $description){
        $data = [
            varchar($title),
            varchar($description)
        ];
        return $this->create($data);
    }

    public function getAllUsers(){
        return $this->getAll();
    }
}