<?php

namespace Patterns\Classes\Command;

use Patterns\Classes\Command\ICommand;
use Patterns\Classes\Command\Computer;

Class StartComputer implements ICommand
{
    public $device; 

    public function __construct(Computer $device)
    {
        $this->device = $device;
    }

    public function execute()
    {
        $this->device->start();
    }
}