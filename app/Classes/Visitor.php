<?php

namespace App\Classes;

use App\Classes\static\Human;

class Visitor extends Human
{
    public function info(): void
    {
        print_r('-----------------------' . "\n");
        print_r($this->getName() . ' is in Moscow now ' . $this->getName() .' is ' . $this->getAge() . ' years old');
        print_r("\n");
    }
}