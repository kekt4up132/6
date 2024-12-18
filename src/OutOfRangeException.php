<?php

namespace MyProject;

class OutOfRangeException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Возраст должен быть в диапазоне от 0 до 150 лет.');
    }
}