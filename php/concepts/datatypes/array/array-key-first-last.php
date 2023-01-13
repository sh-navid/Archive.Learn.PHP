<?php

$arr = [21, 31, 41, 51];

$k1 = array_key_first($arr);
$k2 = array_key_last($arr);

echo $k1, " - ", $arr[$k1], "\n";
echo $k2, " - ", $arr[$k2], "\n";
// 0 - 21
// 3 - 51

echo array_key_exists(3, $arr) ? "T" : "F";
echo key_exists(3, $arr) ? "T" : "F";
