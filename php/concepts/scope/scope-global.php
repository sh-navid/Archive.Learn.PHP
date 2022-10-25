<?php

$a=12;
$b=13;

function myFunction(){
    global $b,$c;
    static $d;
}

myFunction();

print_r(array_keys($GLOBALS));
/* Output
(
    [0] => _GET
    [1] => _POST
    [2] => _COOKIE
    [3] => _FILES
    [4] => argv
    [5] => argc
    [6] => _SERVER
    [7] => GLOBALS
    [8] => a
    [9] => b
    [10] => c
)
*/

print_r($GLOBALS["a"]);