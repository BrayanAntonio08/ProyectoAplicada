<?php

require_once(SERVICES_PATH . 'Database.php');
require_once(SERVICES_PATH .'Datatypes.php');

class Model
{
    protected Database $db;
    protected string $entity;


    public function __construct($entity)
    {
        
        $this->db = Database::getInstance();

        $this->entity = $entity;
    }

    public function getAll(){
        $query = $this->db->prepare('CALL sp_get_all_'.$this->entity.'()');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getById($id)
    {
        $queryString = 'call sp_get_' . $this->entity . '(' . $id . ')';
        $query = $this->db->prepare($queryString);
        $query->execute();
        $resuldado = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resuldado[0];
    }

    public function create($data)
    {
        $queryString = 'CALL sp_create_'.$this->entity.'('.implode(', ', $data).')';
       
        $query= $this->db->prepare($queryString);
        $query->execute();

        return $query->errorInfo();
    }

}