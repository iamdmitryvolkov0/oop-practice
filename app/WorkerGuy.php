<?php

namespace App;
class WorkerGuy
{
    public string $name = 'DefaultName';
    public int $age = 20;

//    public function __construct($name, $age) {}


    public function info(): void
    {
        print_r($this->name .' is working hard now'. ' He is ' . $this->age . ' years old' . "\n");
    }
}