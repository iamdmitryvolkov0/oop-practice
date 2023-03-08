<?php

namespace App\Traits;

trait HasRest
{
    public function rest(): void
    {
        print_r($this->getName() . ' has vacation' . "\n");
    }
}