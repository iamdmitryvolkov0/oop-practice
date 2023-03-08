<?php

namespace App\Classes\static;

use App\Interfaces\HumanInterface;

abstract class Human implements HumanInterface
{
    private string $name;
    private int $age;
    private string $position;

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
    private int $hours;

    /**
     * @return int
     */
    public function getHours(): int
    {
        return $this->hours;
    }

    /**
     * @param int $hours
     */
    public function setHours(int $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }


    /**
     * @param $name
     * @param $age
     * @param $position
     */
    public function __construct($name, $age, $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position=$position;

    }
}