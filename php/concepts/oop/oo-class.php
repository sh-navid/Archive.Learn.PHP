<?php

class Person
{
    // Property
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    // Method
    function get_name()
    {
        return $this->name;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function __destruct()
    {
        echo "\n".$this->name." Destroyed";
    }
};

$p1 = new Person("P1");

$p2 = new Person("");
$p2->set_name("[P2]");

echo $p1->get_name() . " - " . $p2->get_name(), "\n";

// unset($p1); to destroy object

echo var_dump($p1 instanceof Person);