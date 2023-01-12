<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

$color = imagecolorallocate($img, 30, 30, 90);

// imagefilter($img, IMG_FILTER_NEGATE);
// imagefilter($img, IMG_FILTER_PIXELATE, 10, 10);

// Black and white image
imagefilter($img, IMG_FILTER_GRAYSCALE);
imagefilter($img, IMG_FILTER_CONTRAST, -90);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);



// Helper links:
// https://stackoverflow.com/questions/254388/how-do-you-convert-an-image-to-black-and-white-in-php
