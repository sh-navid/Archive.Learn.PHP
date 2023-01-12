<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

echo print_r(imagecolorsforindex($img, imagecolorat($img, 10, 10)));

imagedestroy($img);
