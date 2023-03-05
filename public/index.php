<?php

use App\Visitor;
use App\WorkerGuy;

require('../vendor/autoload.php');

$worker = new WorkerGuy('Gregory', 20);
$worker->info();

$worker2=new WorkerGuy('Oleg', 27);
$worker2->info();

$guy = new Visitor('Ivan', 30);
$guy->info();
