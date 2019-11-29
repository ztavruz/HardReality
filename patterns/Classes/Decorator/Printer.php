<?php

namespace Patterns\Classes\Decorator;

class Printer implements IPrinter
{
    public function printDocument()
    {
        echo "Начата печать";
    }
}