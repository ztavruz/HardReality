<?php

namespace Patterns\Classes\Command;

Class Computer
{
    public function start()
    {
        echo "Компьютер запущен";
    }

    public function reset()
    {
        echo "Компьютер перезагружен";
    }

    public function stop()
    {
        echo "Компьютер выключен";
    }
}