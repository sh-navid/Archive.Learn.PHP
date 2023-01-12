<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");


for ($a = 0; $a < 20; $a += 8) {
    for ($b = 0; $b < 20; $b += 8) {
        $color = imagecolorallocate($img, $a+50, $b+30, $a + $b);
        imagesetpixel($img, $a, $b, $color);
    }
}


imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
