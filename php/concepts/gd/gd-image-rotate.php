<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

$color = imagecolorallocate($img, 30, 30, 90);

$img = imagerotate($img, 45, $color, true);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
