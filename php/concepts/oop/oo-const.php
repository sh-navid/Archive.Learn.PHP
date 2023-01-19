<?php

class T
{
    const CONSTANT = "[C]";

    static function sf(){
        echo "STATIC";
    }
}

echo T::CONSTANT;
T::sf();