<?php

namespace App;
class WorkerGuy extends Human
{

    public function info(): void
    {
        print_r($this->name . ' is working hard now' . ' He is ' . $this->age . ' years old' . "\n");
    }
}