<?php
require __DIR__ . "/oo-space.php";

use Space\SubSpace\A;


//$a = new Test();
$a = new A\Test();
$a = new Space\SubSpace\A\Test();


echo "\n" . A\TC . "\n";
