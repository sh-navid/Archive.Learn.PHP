<?php

$str = "12";
$int = intval($str);
echo $str . " - " . $int."\n";
echo var_dump($str);
echo var_dump($int);

// 12 - 12
// string(2) "12"
// int(12)

$int = (int)($str);
echo $str . " - " . $int."\n";
echo var_dump($str);
echo var_dump($int);

// 12 - 12
// string(2) "12"
// int(12)