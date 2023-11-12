<?php
require_once(CORE_PATH."Model.php");
class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct('user');
    }

    public function getUser($username)
    {
        return $this->getById(varchar($username));
    }

    public function createUser($data)
    {
        //se definen los parametros
        $data = [
            varchar($data["username"]),
            varchar($data["password"])
        ];
        return $this->create($data);
    }
}