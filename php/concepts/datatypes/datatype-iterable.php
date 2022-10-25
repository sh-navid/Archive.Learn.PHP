<?php

function Generator(): iterable
{
    yield "10%";
    yield "50%";
    yield "100%";
}

foreach (Generator() as $v) {
    echo $v . "\n";
}



function func(iterable $arr = []): iterable
{
    $arr[0] *= 200;
    return $arr;
}

foreach (func([10, 20, 30]) as $v) {
    echo $v . "\n";
}
