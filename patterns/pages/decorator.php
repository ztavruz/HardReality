<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Patterns\Classes\Decorator\Printer;
use Patterns\Classes\Decorator\PrinterTXT;
use Patterns\Classes\Decorator\PrinterPDF;

$printer = new Printer();
$printer->printDocument();
echo "<br>";
$printerPDF = new PrinterPDF(new Printer);
$printerPDF->printDocument();
echo "<br>";
$printerTXT = new PrinterTXT(new Printer);
$printerTXT->printDocument();
echo "<br>";