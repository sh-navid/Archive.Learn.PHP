<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

$color = imagecolorallocate($img, 40, 100, 150);

imagefill($img, 0, 0, $color);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);