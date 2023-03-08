<?php

use App\Classes\Salary;
use App\Classes\Visitor;
use App\Classes\Worker;

require('../vendor/autoload.php');

$worker = new Worker('Gregory', 20, 'worker');
$worker->setHours(140);
$workerSalary = Salary::count($worker->getHours(), $worker->getName());
print_r($workerSalary);

$worker2 = new Worker('Oleg', 27, 'worker');
$worker2->setHours(100);
$worker2->rest();

$visitor = new Visitor('Ivan', 30, 'visitor');
$visitor->setHours(0);
$visitorSalary = Salary::count($visitor->getHours(), $visitor->getName());
print_r($visitorSalary);

$friends = [$worker, $worker2, $visitor];

foreach ($friends as $friend) {
    $friend->info();
}

