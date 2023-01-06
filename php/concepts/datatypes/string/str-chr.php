<?php

echo strchr("Hello to my World 123", "World", false) . "\n";
// World 123

echo strchr("Hello to my World 123", "World", true) . "\n";
// Hello to my

echo var_dump(strchr("Hello to my World 123", "world", false)) . "\n";
// bool(false)

echo var_dump(strchr("Hello to my World 123", "world", true)) . "\n";
// bool(false)

echo var_dump(strrchr("Hello to my World 123", "World")) . "\n";
// string(9) "World 123"