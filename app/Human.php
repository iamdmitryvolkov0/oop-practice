<?php

namespace App;

class Human
{
    public string $name = 'DefaultName';
    public int $age = 20;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}