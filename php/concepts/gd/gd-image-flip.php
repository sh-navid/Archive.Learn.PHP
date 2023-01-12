<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

imageflip($img,IMG_FLIP_VERTICAL);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);