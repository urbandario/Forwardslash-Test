<?php
class BirdController {
    public function feed(Bird $bird) {
        $bird->eat();
    }

    public function releaseFromCliff(Eagle $eagle) {
        $eagle->fly();
    }

    public function runFrom(Ostrich $ostrich) {
        $ostrich->run();
    }

    public function walk(Bird $bird) {
        $bird->walk();
    }
}
