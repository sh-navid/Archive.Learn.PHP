<?php
$arr = ["G" => "GoodBye", 1 => 1000, 3 => 2000, 2 => 3000, "B" => "Apple", "A" => "Banana"];

print_r(array_keys($arr));
print_r(array_values($arr));
// Array
// (
//     [0] => G
//     [1] => 1
//     [2] => 3
//     [3] => 2
//     [4] => B
//     [5] => A
// )
// Array
// (
//     [0] => GoodBye
//     [1] => 1000
//     [2] => 2000
//     [3] => 3000
//     [4] => Apple
//     [5] => Banana
// )