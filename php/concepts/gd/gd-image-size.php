<?php

$size = getimagesize(__DIR__ . "/test-image.png");
echo print_r($size);
/*
    [0] => 200
    [1] => 200
    [2] => 3
    [3] => width="200" height="200"
    [bits] => 8
    [mime] => image/png
*/