<?php


$f = 12.4;
var_dump($f);
// float(12.4)
echo gettype($f) . "\n";
// double


$f = 12.00000000000000000000000000000000000004;
var_dump($f);
// float(12)
echo gettype($f) . "\n";
// double


$f = 120000000000000000000000000000000000000.4;
var_dump($f);
// float(1.2E+38)
echo gettype($f);
// double


echo PHP_FLOAT_MAX."\n";
// 1.7976931348623E+308

echo PHP_FLOAT_MIN."\n";
// 2.2250738585072E-308