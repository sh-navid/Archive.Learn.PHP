<?php


$i = 12.2;
echo (is_object($i) ? "True" : "False"), "\n";
// False


class Shape
{
}
$obj = new Shape();
echo (is_object($obj) ? "True" : "False"), "\n";
// True