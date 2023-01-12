<?php

$img = imagecreatetruecolor(200, 200);

$color = imagecolorallocate($img, 100, 100, 100);

imageantialias($img, true);

imagesetthickness($img,20);

imagerectangle($img, 10, 10, 190, 190, $color);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
