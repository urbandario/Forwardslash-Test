<?php
require_once 'Traits/flying.php';
require_once 'Traits/walking.php';
require_once 'Interfaces/animal.php';

abstract class Bird implements Animal {
    protected $gender;

    public function __construct($gender) {
        $this->gender = $gender;
    }

    public function eat() {
        echo "The bird is eating. \n";
    }
}