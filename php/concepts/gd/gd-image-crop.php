<?php

$img = imagecreatefrompng(__DIR__ . "/test-image.png");

$img=imagecrop($img, ["x" => 0, "y" => 0, "width" => 100, "height" => 100]);

imagepng($img, __DIR__ . "/test-image.png");

imagedestroy($img);
