<?php

// Ubuntu
// sudo apt install php-gd

$W = 200;
$H = 60;
$C = "1234567890abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

if (extension_loaded('gd') && function_exists('gd_info')) {
    $img = @imagecreatetruecolor($W, $H) or die('Cannot init GD-image stream');
    imagesavealpha($img, true);


    $color = imagecolorallocatealpha($img, rand(0, 255), rand(0, 255), rand(0, 255), 0);
    imagefill($img, 0, 0, $color);


    $left = 10;
    for ($i = 0; $i < 6; $i++) {
        $C = str_shuffle($C);

        $color = imagecolorallocatealpha($img, rand(0, 255), rand(0, 255), rand(0, 255), rand(0, 100));
        imagettftext($img, rand(20, 40), rand(-45, 45), $left, 40, $color, __DIR__ . "/font.ttf", $C[0]);
        //imagestring($img, 300, 20, 20, "A", $color);
        $left += 30;
    }


    header('Content-Type: image/png');
    imagepng($img);
}
