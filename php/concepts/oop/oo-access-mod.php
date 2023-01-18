<?php

class T
{
    // Property
    private $pri = "PRI";
    protected $pro = "PRO";
    public $pub = "PUB";
};

$p = new T();
$p->pub = 12;

echo $p->pub;
// 12

// echo $p->pro;
// Uncaught Error: Cannot access protected property

// echo $p->pri;
// Uncaught Error: Cannot access private property



class TT extends T
{
    function show()
    {
        echo "\n".$this->pro;
        // PRO

        echo "\n".$this->pri;
        // PHP Warning:  Undefined property: TT::$pri
    }
};
$pt = new TT();
echo $pt->pub."\n";
// PUB

$pt->show();
