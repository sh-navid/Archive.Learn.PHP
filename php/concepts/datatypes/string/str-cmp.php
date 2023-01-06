<?php

echo strcmp("Hello", "Hello") . "\n";
// 0

echo strcmp("Hello", "Hell") . "\n";
// 1

echo strcmp("Hel", "Hello") . "\n";
// -2



echo strncmp("Hel", "Hello", 3) . "\n";
// 0

echo strncmp("Hel", "Hello", 4) . "\n";
// -1



echo strnatcmp("ABC","ABD"). "\n";
// -1

echo strnatcmp("ABD","ABC"). "\n";
// 1



// "strncmp"
// Binary safe string comparison of the first n characters
// https://www.php.net/manual/en/function.strncmp.php

// "strnatcmp"
// String comparisons using a "natural order" algorithm
// https://www.php.net/manual/en/function.strnatcmp.php