<?php

class T
{
    // Property
    private $pri;
    protected $pro;
    public $pub;
};

$p = new T();
$p->pub = 12;

echo $p->pub;
// 12

// echo $p->pro;
// Uncaught Error: Cannot access protected property

// echo $p->pri;
// Uncaught Error: Cannot access private property
