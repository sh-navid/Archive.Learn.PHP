<?php

echo str_replace("H", "M", "Hello") . "\n";
// Mello

echo str_replace("h", "M", "Hello") . "\n"; // Case Sensitive
// Hello

echo str_ireplace("h", "M", "Hello") . "\n"; // Case InSensitive
// Mello