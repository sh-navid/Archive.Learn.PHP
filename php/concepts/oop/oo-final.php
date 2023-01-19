<?php

class T
{
    public function f()
    {
        echo "\nfunction";
    }
};

class TT extends T
{
    public function f()
    {
        echo parent::f() . "2";
    }
};

$t = new TT();
$t->f();



final class G{};
// class GG extends G{};
// PHP Fatal error:  Class GG cannot extend final class G



class H{
    final function k(){}
};

class HH extends H{
    // function k(){}
    // PHP Fatal error:  Cannot override final method H::k()
};