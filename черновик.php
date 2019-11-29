<?php

Карта зависимостей = [

GameRun->render($)

Galaxi->[Sistems]

Sistem->[Planets]

Planet->[PlanetSectors]

Sector->[Locations]

Location->[Coordinats]

Coords->[x , y]

]; 

class Galaxi() {

$name = "...";
$arraySistems = [ ];

}

class Sistem() {

$name = "...";
$arrayPlanets = [ ];

}

class Planet() {

$name = "...";
$arrayPlanetSectors = [ ];

}

class PlanetSector() {

$name = "...";
$position= $arraySectors[0][1];

}

class SectorItem() {

$name = "...";
$arrayReliefItems = [ ];
$arrayMobs = [ ];

function addReliefItem(){

}
}

class ReliefItem() {

$name = "...";
$type = int; //(terra, water, air)
$img = "content/img/name.png";
$size = 10; //px
$positionX = int; //px
$positionY = int; //px

}

class Personaj {

$currentPosition = [ 

'currentSistemName' => Sistem($name),
'currentPlaneNamet' => new Planet($name),
'currentSectorName' => new Sector($name),
'currentLocation'=>new Location($name),
];
////////////////////
{
    "name": "ztavruz/hard-reality",
    "authors": [
        {
            "name": "ztavruz",
            "email": "mr.ztavruz1987@mail.ru"
        }
    ],
    "require": {},
    "autoload": {
        "psr-4": {
            "Engine\\": "engine",
            "Admin\\": "admin",
            "Game\\": "game",
            "Patterns\\": "patterns"
        }
    }
}

}
