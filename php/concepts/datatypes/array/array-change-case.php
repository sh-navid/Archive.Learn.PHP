<?php

$array = ["A" => 100, "B" => 200];

$array = array_change_key_case($array);

print_r($array);

// Array
// (
//     [a] => 100
//     [b] => 200
// )