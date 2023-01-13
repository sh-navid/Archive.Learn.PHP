<?php

$a = [2, 4, 6, 8];
array_map(function ($v) {
    echo $v;
}, $a);


$a = [2, 4, 6, 8];
$b = ["T", "F", "S", "E"];
array_map(function ($k, $v) {
    echo "\n" . $k . " - " . $v;
}, $a, $b);
