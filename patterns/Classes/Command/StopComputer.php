<?php

namespace Patterns\Classes\Command;

use Patterns\Classes\Command\ICommand;
use Patterns\Classes\Command\Computer;

Class StopComputer implements ICommand
{
    public $device; 

    public function __construct(Computer $device)
    {
        $this->device = $device;
    }

    public function execute()
    {
        $this->device->stop();
    }
}