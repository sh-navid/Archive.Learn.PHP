<?php

$str = 14.004;
$int = intval($str);
echo $str . " - " . $int."\n";
echo var_dump($str);
echo var_dump($int);

// 14.004 - 14
// float(14.004)
// int(14)

$int = (int)($str);
echo $str . " - " . $int."\n";
echo var_dump($str);
echo var_dump($int);

// 14.004 - 14
// float(14.004)
// int(14)