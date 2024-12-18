<?php

require 'vendor/autoload.php';

use MyProject\Person;
use MyProject\OutOfRangeException;

$person = new Person("Роман");

$agesToTest = [-1, 20, 151, 100];

foreach ($agesToTest as $age) {
    try {
        $person->setAge($age);
        echo "Возраст установлен: " . $person->getAge() . "\n";
    } catch (OutOfRangeException $e) {
        echo "Ошибка: " . $e->getMessage() . "\n";
    }
}
