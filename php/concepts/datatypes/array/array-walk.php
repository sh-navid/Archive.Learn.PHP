<?php

$arr = [44, 55, 66, 77];

// ----------------------------------------------------

function callback($v, $k)
{
    echo $k . " - " . $v . "\n";
}
array_walk($arr, "callback");

// ----------------------------------------------------

array_walk($arr, function ($v, $k) {
    echo $k . " - " . $v . "\n";
});
