<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Patterns\Classes\Singletone\Singletone;




$single1 = Singletone::getInstance();  
$single2 = Singletone::getInstance();

echo $single1->rand;
echo '<br>';
echo $single2   ->rand;