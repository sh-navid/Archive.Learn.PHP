<?php

class T
{
    const CONSTANT = "[C]";

    static function sf()
    {
        echo "STATIC";
    }

    function __construct()
    {
        self::sf();
    }
}

echo T::CONSTANT;
T::sf();
new T();
