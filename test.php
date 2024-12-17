<?php

require 'vendor/autoload.php';

try {
    $person = new Person("Роман", 18);
    echo "Имя: " . $person->getName() . ", Возраст: " . $person->getAge() . PHP_EOL;

    $person->setAge(200);
} catch (OutOfRangeException $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL;
}

try {
    $person->setAge(1000);
} catch (OutOfRangeException $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL;
}