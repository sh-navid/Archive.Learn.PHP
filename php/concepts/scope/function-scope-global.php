<?php

$a=10;

function func1(){
    global $a;
    $a=14;
    print $a;
    print "\n";
}

func1();
print $a;