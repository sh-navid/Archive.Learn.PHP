<?php

echo number_format(12000000, 0, ":", "/");
// 12/000/000

echo number_format(12000000, 4, ":", "/");
// 12/000/000:0000

/*
// https://www.php.net/manual/en/function.number-format.php
number_format(
    float $num,
    int $decimals = 0,
    ?string $decimal_separator = ".",
    ?string $thousands_separator = ","
): string
*/