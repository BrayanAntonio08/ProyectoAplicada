<?php

class Console{
    private static $data_queue = array();

    private function __construct() {
        // Hacer el constructor privado evita que se instancie la clase.
    }

    public static function log($data) {
        array_push(self::$data_queue, $data);
    }

    public static function pop() {
        if (count(self::$data_queue) > 0) {
            $value = array_shift(self::$data_queue);
            return $value;
        }
        return null;
    }

    public static function logSize():int{
        return count(self::$data_queue);
    }
}