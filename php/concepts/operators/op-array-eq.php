<?php

$a = [10, 2, 3];
$b = [3, 4, 5, 8];
$c = [10, 2, 3];
$d = ["10", "2", "3"];

echo $a == $a ? "T" : "N", "\n";
echo $a == $b ? "T" : "N", "\n";
echo $a == $c ? "T" : "N", "\n";
echo $a == $d ? "T" : "N", "\n";
// T
// N
// T
// T


echo $a === $a ? "T" : "N", "\n";
echo $a === $b ? "T" : "N", "\n";
echo $a === $c ? "T" : "N", "\n";
echo $a === $d ? "T" : "N", "\n";
// T
// N
// T
// N
