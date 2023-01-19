<?php
trait TR
{
    function f1()
    {
    }

    function f2()
    {
    }
}

trait TR2
{
    function f3()
    {
    }

    function f4()
    {
    }
}

class C
{
    use TR;
    use TR2;
}

$c = new C();
$c->f1();
$c->f3();
