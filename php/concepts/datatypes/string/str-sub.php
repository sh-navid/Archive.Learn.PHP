<?php

echo substr("Hello to my world", 4) . "\n";
// o to my world

echo substr("Hello to my world", 4, 6) . "\n";
// o to m

echo substr_count("Hello to my world", "my") . "\n";
// 1

echo substr_count("Hello to my world", "o") . "\n";
// 3