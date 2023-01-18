<?php

class Person
{
    // Property
    public $name;

    // Method
    function get_name()
    {
        return $this->name;
    }

    function set_name($name)
    {
        $this->name = $name;
    }
};

$p1 = new Person();
$p1->name = "[P1]";

$p2 = new Person();
$p2->name = "[P2]";

echo $p1->name . " - " . $p2->name;
