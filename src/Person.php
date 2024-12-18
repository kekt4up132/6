<?php

namespace MyProject;

class Person
{
    private string $name;
    private ?int $age = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        if ($age < 0 || $age > 150) {
            throw new OutOfRangeException();
        }
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }
}
