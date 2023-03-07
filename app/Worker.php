<?php

namespace App;
class Worker extends Human
{
    use HasRest;
    public function info(): void
    {
        print_r('-----------------------' . "\n");
        print_r($this->getName() . ' is working hard now' . ' He is ' . $this->getAge() . ' years old');
        print_r("\n");
    }
}