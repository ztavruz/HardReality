<?php

namespace Patterns\Classes\Decorator;

class PrinterPDF implements IPrinter
{
    public $printer;
    public $typeDocument;

    public function __construct(IPrinter $printer)
    {
        $this->printer = $printer;
        $this->typeDocument = " PDF документ";
    }


    public function printDocument()
    {
       echo $this->printer->printDocument() . $this->typeDocument;
    }
}