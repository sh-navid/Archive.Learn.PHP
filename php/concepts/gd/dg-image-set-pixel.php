<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");


for ($a = 0; $a < 200; $a += 5) {
    for ($b = 0; $b < 200; $b += 5) {
        $color = imagecolorallocate($img, $a + 10, $b + 30, $a + 10);
        imagesetpixel($img, $a, $b, $color);
    }
}


imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
