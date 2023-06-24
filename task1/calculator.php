<?php
class Calculator {
    public static function addNumbers(...$numbers) {
        if (empty($numbers)) {
            throw new Exception('No numbers provided.');
        }
        
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new Exception('Invalid input. Non-numeric value detected.');
            }
        }

        return array_sum($numbers);
    }
}

try {
    $result1 = Calculator::addNumbers(5, 6, 6);
    echo $result1;
} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage();
}
