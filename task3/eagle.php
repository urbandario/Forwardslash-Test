<?php
require_once 'bird.php';

class Eagle extends Bird {
    use WalkingTrait, FlyingTrait;

    public function fly() {
        echo "The eagle is soaring high in the sky. \n";
    }

    public function eat() {
        echo "The eagle is tearing apart its prey with its sharp beak. \n";
    }
}