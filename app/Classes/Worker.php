<?php

namespace App\Classes;

use App\Classes\static\Human;
use App\Traits\HasRest;

class Worker extends Human
{
    use HasRest;

    public function info(): void
    {
        print_r('-----------------------' . "\n");
        print_r($this->getName() . ' is working hard now' . ' He is ' . $this->getAge() . ' years old');
        print_r("\n");
    }

    public function __toString(): string
    {
        return $this->getName() . ' is ' . $this->getAge() . '.' . ' | Role is ' .$this->getPosition();
    }

    public function __call(string $name, array $arguments)
    {
        print_r("Method $name doesn`t exist.");
    }
}