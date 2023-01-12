<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

$color = imagecolorallocate($img, 30, 30, 90);

//imagefilter($img, IMG_FILTER_NEGATE);
imagefilter($img, IMG_FILTER_PIXELATE);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
