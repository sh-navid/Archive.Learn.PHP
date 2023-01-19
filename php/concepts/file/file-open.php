<?php

$path = __DIR__ . "/README.md";
$f = fopen($path, "r") or die("Something is wrong"); //r w a ...
$data = fread($f, filesize($path));
echo $data;
fclose($f);
