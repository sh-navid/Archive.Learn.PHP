<?php

$arr = [2, 4, 7];

print_r(current($arr)); // alias pos()
// 2

print_r(next($arr));
// 4

print_r(prev($arr));
// 2

print_r(end($arr));
// 7

print_r(reset($arr));
// 2

// print_r(each($arr));
