<?php
$res = preg_split("/pret+y/i", "Hello to my prettty little pretttTty annoying pretttttttty world");

print_r($res);
// Array
// (
//     [0] => Hello to my 
//     [1] =>  little 
//     [2] =>  annoying 
//     [3] =>  world
// )