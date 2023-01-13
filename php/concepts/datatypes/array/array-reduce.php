<?php

$arr = [3, 5, 7, 9];

$result = array_reduce($arr, function ($carry, $item) {
    return $carry + $item;
});

echo $result;
