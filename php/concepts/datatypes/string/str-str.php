<?php

echo strstr("Hello to my World 123", "World", false) . "\n";
// World 123

echo strstr("Hello to my World 123", "World", true) . "\n";
// Hello to my

echo var_dump(strstr("Hello to my World 123", "world", false)) . "\n";
// bool(false)

echo var_dump(strstr("Hello to my World 123", "world", true)) . "\n";
// bool(false)

echo var_dump(stristr("Hello to my World 123", "world", false)) . "\n";
// string(9) "World 123"

echo var_dump(stristr("Hello to my World 123", "world", true)) . "\n";
// string(12) "Hello to my "
