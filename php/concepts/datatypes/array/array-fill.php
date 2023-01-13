<?php 

print_r(array_fill(2,8,"car"));
// Array
// (
//     [2] => car
//     [3] => car
//     [4] => car
//     [5] => car
//     [6] => car
//     [7] => car
//     [8] => car
//     [9] => car
// )

print_r(array_fill_keys([2,4,6,8],"bus"));
// Array
// (
//     [2] => bus
//     [4] => bus
//     [6] => bus
//     [8] => bus
// )