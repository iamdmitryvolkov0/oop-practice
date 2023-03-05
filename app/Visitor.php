<?php

namespace App;
class Visitor extends Human
{
    public function info(): void
    {
        print_r($this->name . ' is in Moscow now' . ' He is ' . $this->age . ' years old' . "\n");
    }
}