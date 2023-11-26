<?php

require_once(SERVICES_PATH . 'Database.php');
require_once(SERVICES_PATH . 'Datatypes.php');

class Model
{
    protected Database $db;
    protected string $entity;


    public function __construct($entity)
    {

        $this->db = Database::getInstance();

        $this->entity = $entity;
    }

    public function getAll()
    {
        $query = $this->db->prepare('CALL sp_get_all_' . $this->entity . '()');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getById($id)
    {
        $queryString = 'CALL sp_get_' . $this->entity . '(' . $id . ')';
        $query = $this->db->prepare($queryString);
        $query->execute();
        $resuldado = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resuldado[0];
    }

    public function create($data)
    {
        $queryString = 'CALL sp_create_' . $this->entity . '(' . implode(', ', $data) . ')';

        echo $queryString;        
        $query = $this->db->prepare($queryString);
        $query->execute();

        return $query->rowCount();
    }

    public function update($id, $data)
    {
        $queryString = 'CALL sp_update_' . $this->entity . '(' . implode(', ', $data) . ')';
        $query = $this->db->prepare($queryString);
        $query->execute();
        return $query->rowCount();
    }

}