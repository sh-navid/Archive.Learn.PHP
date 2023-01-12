<?php

$array = ["A" => 100, "B" => 200];
print_r($array);
// Array
// (
//     [A] => 100
//     [B] => 200
// )

$array = array_flip($array);
print_r($array);
// Array
// (
//     [100] => A
//     [200] => B
// )