<?php
$arr = ["G" => "GoodBye", 1 => 1000, 3 => 2000, 2 => 3000, "B" => "Apple", "A" => "Banana"];

echo array_rand($arr, 1); // 2
echo array_rand($arr, 1); // B
echo array_rand($arr, 1); // 1

print_r(array_reverse($arr, false));
// Array
// (
//     [A] => Banana
//     [B] => Apple
//     [0] => 3000
//     [1] => 2000
//     [2] => 1000
//     [G] => GoodBye
// )

print_r(array_reverse($arr, true)); //preserve keys
// Array
// (
//     [A] => Banana
//     [B] => Apple
//     [2] => 3000
//     [3] => 2000
//     [1] => 1000
//     [G] => GoodBye
// )
