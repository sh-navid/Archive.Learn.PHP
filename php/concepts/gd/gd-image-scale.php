<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

$color = imagecolorallocate($img, 30, 30, 90);

$img = imagescale($img,40);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
