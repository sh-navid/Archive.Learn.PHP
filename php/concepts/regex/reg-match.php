<?php
echo preg_match("/pret+y/i", "Hello to my prettty pretttTty pretttttttty world") . "\n";
// 1

echo preg_match_all("/pret+y/i", "Hello to my prettty pretttTty pretttttttty world") . "\n";
// 3