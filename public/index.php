<?php

use App\Salary;
use App\Visitor;
use App\Worker;

require('../vendor/autoload.php');

$worker = new Worker('Gregory', 20);
$worker->setHours(140);
$worker->info();
$salary = Salary::count($worker->getHours(), $worker->getName());
print_r($salary);

$worker2 = new Worker('Oleg', 27);
$worker2->setHours(100);
$worker2->info();
$worker2->rest();

$visitor = new Visitor('Ivan', 30);
$visitor->info();
$visitor->setHours(0);
$salary = Salary::count($visitor->getHours(), $visitor->getName());
print_r($salary);

