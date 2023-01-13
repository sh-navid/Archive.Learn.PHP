<?php
$arr = ["G" => "GoodBye", 1 => 1000, 3 => 2000, 2 => 3000, "B" => "Apple", "A" => "Banana"];

$tmp = $arr;
sort($tmp);
print_r($tmp);
// Array
// (
//     [0] => 1000
//     [1] => 2000
//     [2] => 3000
//     [3] => Apple
//     [4] => Banana
//     [5] => GoodBye
// )

$tmp = $arr;
rsort($tmp);
print_r($tmp);
// Array
// (
//     [0] => GoodBye
//     [1] => Banana
//     [2] => Apple
//     [3] => 3000
//     [4] => 2000
//     [5] => 1000
// )

$tmp = $arr;
asort($tmp);
print_r($tmp);
// Array
// (
//     [1] => 1000
//     [3] => 2000
//     [2] => 3000
//     [B] => Apple
//     [A] => Banana
//     [G] => GoodBye
// )

$tmp = $arr;
arsort($tmp);
print_r($tmp);
// Array
// (
//     [G] => GoodBye
//     [A] => Banana
//     [B] => Apple
//     [2] => 3000
//     [3] => 2000
//     [1] => 1000
// )

$tmp = $arr;
ksort($tmp);
print_r($tmp);
// Array
// (
//     [A] => Banana
//     [B] => Apple
//     [G] => GoodBye
//     [1] => 1000
//     [2] => 3000
//     [3] => 2000
// )

$tmp = $arr;
krsort($tmp);
print_r($tmp);
// Array
// (
//     [3] => 2000
//     [2] => 3000
//     [1] => 1000
//     [G] => GoodBye
//     [B] => Apple
//     [A] => Banana
// )

$tmp = $arr;
natsort($tmp);
print_r($tmp);
// Array
// (
//     [1] => 1000
//     [3] => 2000
//     [2] => 3000
//     [B] => Apple
//     [A] => Banana
//     [G] => GoodBye
// )