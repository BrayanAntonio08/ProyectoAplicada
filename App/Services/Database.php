<?php

class Database extends PDO
{

    private static $instance;

    public function __construct()
    {
        // cargar datos referentes a la base de datos
        parent::__construct('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

        
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Database();
        }
        return self::$instance;
    }
}