<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

imagecopy($img, $img, 0, 0, 50, 50, 50, 50);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
