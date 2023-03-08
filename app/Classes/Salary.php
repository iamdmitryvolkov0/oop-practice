<?php

namespace App\Classes;

class Salary
{
    static public int $totalMoney;
    static public function count(int $hours, string $name): string
    {
        $moneyPerHour = 1000;
        self::$totalMoney = $hours * $moneyPerHour;
        return $hours !==0 ? "$name`s salary is " .self::$totalMoney . "$\n" : "$name, No work - no money\n";
    }
}