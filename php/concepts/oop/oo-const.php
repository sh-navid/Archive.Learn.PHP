<?php

class T
{
    const CONSTANT = "[C]";

    static $var = "[SV]";

    static function sf()
    {
        echo "STATIC";
    }

    function __construct()
    {
        self::sf();
    }
}

echo T::CONSTANT . "\n" . T::$var . "\n";
T::sf();
new T();

T::$var = 12;
// T::CONSTANT=12;
// PHP Parse error:  syntax error, unexpected token "="