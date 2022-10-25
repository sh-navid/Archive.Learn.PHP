<?php

//Callable, Callback

function f()
{
    return "Hello";
}

function f2(callable $callback)
{
    echo var_dump($callback);
    echo (is_callable($callback) ? "True" : "False"), "\n";
    // True
    echo $callback();
}

f2("f");
