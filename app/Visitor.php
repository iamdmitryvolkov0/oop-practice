<?php

namespace App;
class Visitor extends Human
{
    public function info(): void
    {
        print_r('-----------------------' . "\n");
        print_r($this->getName() . ' is in Moscow now' . ' He is ' . $this->getAge() . ' years old');
        print_r("\n");
    }
}