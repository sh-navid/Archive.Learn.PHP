<?php

$img = imagecreatetruecolor(200, 200);

$color = imagecolorallocate($img, 100, 100, 100);
$c1 = imagecolorallocate($img, 50, 100, 150);
$c2 = imagecolorallocate($img, 100, 50, 100);
$c3 = imagecolorallocate($img, 150, 100, 50);

imageantialias($img, true);

imagesetthickness($img, 5);

imagesetstyle($img, [$c1, $c2, $c3]);

imageline($img, 0, 0, 200, 200, $color);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
