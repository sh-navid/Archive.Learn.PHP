<?php

print_r(array_diff([1,2,3],[1,2,3]));
// Array
// (
// )

print_r(array_diff([1,2,3,4],[1,2,3]));
// Array
// (
//     [3] => 4
// )

print_r(array_diff_key([1,2,3,4],[1,2,3]));
// Array
// (
//     [3] => 4
// )