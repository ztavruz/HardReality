<?php

require_once __DIR__ . "/../../vendor/autoload.php";

// return [
//     '1'=>'SingleTone', //Позволяет создать только 1 instance класса и глобальную точку доступа
//     '2'=>'Command',    //Обертка функции и использование её как объекта
//     '3'=>'Flyweight',  //Для улучшения производительности
//     '4'=>'Observer',   //Обеспечивает независимое выполнение куска кода
//     '5'=>'Prototype',  //
//     '6'=>'State',      //
//     '7'=>'Strategi',   //
//     '8'=>'Decorator'   //
// ];

////////////////////Commands

use Patterns\Classes\Command\User;
use Patterns\Classes\Command\Computer;
use Patterns\Classes\Command\StartComputer;
use Patterns\Classes\Command\ResetComputer;
use Patterns\Classes\Command\StopComputer;

$computer = new Computer();
$user = new User();
$user->setCommand('start', new StartComputer($computer));
$user->setCommand('reset', new ResetComputer($computer));
$user->setCommand('stop', new StopComputer($computer));
// print_r($user->container);

$user->execute('stop');

