<?php

$arr = [4, 5, 6, 7];

array_push($arr, 14);
print_r($arr);
// Array
// (
//     [0] => 4
//     [1] => 5
//     [2] => 6
//     [3] => 7
//     [4] => 14
// )

$p = array_pop($arr);
echo $p . "\n";
print_r($arr);
// 14
// Array
// (
//     [0] => 4
//     [1] => 5
//     [2] => 6
//     [3] => 7
// )

array_unshift($arr, 14);
print_r($arr);
// Array
// (
//     [0] => 14
//     [1] => 4
//     [2] => 5
//     [3] => 6
//     [4] => 7
// )

$p = array_shift($arr);
echo $p . "\n";
print_r($arr);
// 14
// Array
// (
//     [0] => 4
//     [1] => 5
//     [2] => 6
//     [3] => 7
// )