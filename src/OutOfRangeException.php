<?php

namespace MyProject;

class OutOfRangeException extends \Exception
{
    protected $message = 'Возраст должен быть в диапазоне от 0 до 150 лет.';
}
