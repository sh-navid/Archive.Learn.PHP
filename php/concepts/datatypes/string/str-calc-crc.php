<?php

$str = "Hello";
echo crc32($str) . "\n";
// 4157704578

$str = "Helloo";
echo crc32($str) . "\n";
// 206479553

// Want to read more on CRC?
// https://en.wikipedia.org/wiki/Cyclic_redundancy_check