<?php
require_once 'bird.php';

class Ostrich extends Bird {
    use WalkingTrait;

    public function run() {
        echo "The ostrich is running. \n";
    }

    public function walk() {
        echo "The ostrich also can walk. \n";
    }

    public function eat() {
        echo "The ostrich is pecking at the ground to eat. \n";
    }
}