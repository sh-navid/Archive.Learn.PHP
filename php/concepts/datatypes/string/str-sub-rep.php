<?php

echo substr_replace("Hello to my world", "my", 0) . "\n";
// my

echo substr_replace("Hello to my world", "my", 5) . "\n";
// Hellomy

echo substr_replace("Hello to my world", "my", 5, 6) . "\n";
// Hellomy world