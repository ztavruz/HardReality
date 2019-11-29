<?php

namespace Patterns\Classes\Singletone;

class Singletone
{
    private static $instance = null;
    public $rand;

    private function __construct(){
        $this->getNumber();
    }

    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        
        return self::$instance;
    }

    public function getNumber()
    {
        $this->rand = rand();   
    }

}