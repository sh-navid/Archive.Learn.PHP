<?php

$arr = [0 => "A", 2 => "B", 4 => "C"];
$arr = array_replace($arr, [0 => "G", 1 => "M"]);
print_r($arr);
// Array
// (
//     [0] => G
//     [2] => B
//     [4] => C
//     [1] => M
// )