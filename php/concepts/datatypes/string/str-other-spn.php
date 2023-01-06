<?php

echo strspn("Hello to my world", "t", 0) . "\n";
// 0 - NOT SURE ABOUT THIS!

// https://www.php.net/manual/en/function.strspn.php




echo strcspn("Hello to my world", "t", 0) . "\n";
// 6 equal to len("Hello ")