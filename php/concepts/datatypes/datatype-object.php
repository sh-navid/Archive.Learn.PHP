<?php


class Shape
{
  public $count = 12;
};
$obj = new Shape();


var_dump($obj) . "\n";
/*
object(Shape)#1 (1) {
  ["count"]=>
  int(12)
}
*/


print_r($obj) . "\n";
/*
Shape Object
(
    [count] => 12
)
*/


echo gettype($obj) . "\n";
/*
object
*/