<?php

//Callable, Callback

function f()
{
    return "Hello";
}

function f2(callable $callback)
{
    echo var_dump($callback);
    //string(1) "f"
    echo gettype($callback), "\n";
    // string
    echo $callback();
    // Hello
}

f2("f");
