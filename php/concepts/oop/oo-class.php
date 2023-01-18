<?php

class Person
{
    // Property
    private $name;

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
$p1->set_name("[P1]");

$p2 = new Person();
$p2->set_name("[P2]");

echo $p1->get_name() . " - " . $p2->get_name(),"\n";

echo var_dump($p1 instanceof Person);
