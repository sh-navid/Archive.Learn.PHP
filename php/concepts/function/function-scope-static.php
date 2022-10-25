<?php

function func1(){
    $a=0;
    $a+=100;
    print "local - ".$a;
    print "\n";
}

func1();
func1();
func1();

function func2(){
    static $a=0;
    $a+=100;
    print "static - ".$a;
    print "\n";
}

func2();
func2();
func2();