<?php

$img = imagecreatetruecolor(200, 200);

$color = imagecolorallocate($img, 100, 100, 100);

imageantialias($img, true);

imagearc($img, 100, 100, 45, 45, 0, 270, $color);

imageellipse($img, 100, 100, 30, 30, $color);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
