<?php
require_once 'ostrich.php';
require_once 'eagle.php';
require_once 'Controllers/BirdController.php';

// Create an instance of Ostrich
$ostrich = new Ostrich("male");
$ostrich->eat();
$ostrich->walk();
$ostrich->run();

// Create an instance of Eagle
$eagle = new Eagle("female");
$eagle->eat();
$eagle->walk();
$eagle->fly();

// Create an instance of BirdController to test functions
$controller = new BirdController();
$controller->feed($ostrich);
$controller->releaseFromCliff($eagle);
$controller->runFrom($ostrich);
$controller->walk($eagle);