<?php
require_once 'ostrich.php';
require_once 'eagle.php';

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
