<?php
echo preg_replace("/pret+y/", "pretty", "Hello to my prettty pretttTty pretttttttty world") . "\n";
// Hello to my pretty pretttTty pretty world


echo preg_replace("/pret+y/i", "pretty", "Hello to my prettty pretttTty pretttttttty world") . "\n";
// Hello to my pretty pretty pretty world


echo preg_replace("/pret+y/i", "pretty", "Hello to my world") . "\n";
// Hello to my world



// `preg_filter` is like `preg_replace` but if nothing to replace it returns NULL
var_dump(preg_filter("/pret+y/i", "pretty", "Hello to my prettty pretttTty pretttttttty world"));
// string(38) "Hello to my pretty pretty pretty world"

var_dump(preg_filter("/pret+y/i", "pretty", "Hello to my world"));