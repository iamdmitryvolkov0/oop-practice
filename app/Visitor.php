<?php

namespace App;
class Visitor
{
    public string $name = 'DefaultVisitor';
    public int $age = 20;

//    public function __construct($name, $age) {}


    public function info(): void
    {
        print_r($this->name .' is in Moscow now'. ' He is ' . $this->age . ' years old' . "\n");
    }
}