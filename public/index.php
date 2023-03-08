<?php

use App\Classes\Worker;

require('../vendor/autoload.php');

$developer = new Worker('Dima', 23, 'backend');

var_dump((string) $developer);

$developer->veryStrangeFunction();