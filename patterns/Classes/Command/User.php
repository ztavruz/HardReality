<?php

namespace Patterns\Classes\Command;

class User 
{
    public $container = [];

    public function setCommand($nameCommand, ICommand $commandClass)
    {
        $this->container[$nameCommand] = $commandClass;
    }

    public function execute($nameCommand)
    {
        $commandClass;

        foreach ($this->container as $key => $value){
            if ($key == $nameCommand) {
                $commandClass = $value;
                // print_r($nameCommand);
                // echo "<br>";
                // print_r($commandClass);
            }
        }
        $commandClass->execute();
        
    }
}