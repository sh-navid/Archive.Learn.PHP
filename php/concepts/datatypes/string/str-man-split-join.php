<?php

$split = explode(" ", "Hello World");

echo $split[0] . ' - ' . $split[1] . "\n";
// Hello - World

echo implode(" - ", $split) . "\n";
// Hello - World

# -----------------------------------------------

$split = str_split("Hello World", 2);

echo $split[0] . ' - ' . $split[1] . "\n";
// He - ll

echo join(" - ", $split) . "\n";
// He - ll - o  - Wo - rl - d

# -----------------------------------------------

$split = str_split("Hello World", 4);

echo $split[0] . ' - ' . $split[1] . "\n";
// Hell - o Wo

echo join(" - ", $split) . "\n";
// Hell - o Wo - rld
