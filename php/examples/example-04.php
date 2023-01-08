<?php

// Ubuntu
// sudo apt install php-gd

$W = 200;
$H = 60;
$C = "1234567890abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

if (extension_loaded('gd') && function_exists('gd_info')) {
    $img = @imagecreatetruecolor($W, $H) or die('Cannot init GD-image stream');
    imagesavealpha($img, true);

    // Make background of image transparent
    $color = imagecolorallocatealpha($img, 0, 0, 0, 127);
    imagefill($img, 0, 0, $color);

    // Position of first letter
    $left = 10;
    for ($i = 0; $i < 6; $i++) {
        // Select a random character
        $C = str_shuffle($C);

        // Make a random color
        $color = imagecolorallocatealpha($img, rand(0, 255), rand(0, 255), rand(0, 255), rand(0, 100));

        // Draw character on image
        // imagestring($img, 300, 20, 20, "A", $color);
        imagettftext($img, rand(20, 30)/* Size */, rand(-45, 45)/* Rotation */, $left, 40 /* Top */, $color, __DIR__ . "/font.ttf", $C[0]);

        // Move pointer
        $left += 30;
    }

    // Send image to browser
    header('Content-Type: image/png');
    imagepng($img);
}

exit(0);