<?php
class Calculator {
    public static function addNumbers(...$numbers) {
        return array_sum($numbers);
    }
}

$result1 = Calculator::addNumbers(3, 5, 6, 58, 99);
echo $result1;
