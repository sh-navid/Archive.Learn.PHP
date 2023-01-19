<?php
print_r(preg_grep("/pret+y/i", ["Hello", "to", "my", "prettty", "pretttTty", "pretttttttty", "world"]));
// Array
// (
//     [3] => prettty
//     [4] => pretttTty
//     [5] => pretttttttty
// )