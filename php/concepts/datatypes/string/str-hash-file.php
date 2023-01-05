<?php

$path = dirname(__FILE__) . dirname("/");
$file = $path . "str-hash-crypt.php";
$file_md5 = $path . "str-hash-crypt.md5.txt";
$file_sha1 = $path . "str-hash-crypt.sha1.txt";

echo $path . "\n";

echo md5_file($path);
// b9f1ba35cfa84178dbcfa3b9d6f9b9df

echo "\n";

echo sha1_file($path);
// 7bcf632f6ac912cadea1ff94430b8c9c39cd4e80

file_put_contents($file_md5, md5_file($file));

file_put_contents($file_sha1, sha1_file($file));
