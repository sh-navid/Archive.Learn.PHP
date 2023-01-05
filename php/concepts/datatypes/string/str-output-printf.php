<?php

printf("Hello");
// Hello

printf("\n100%%");
// 100%

printf("\nBinary: %b, LowerHex: %x, UpperHex: %X, Octal: %o", 15, 15, 15, 15);
// Binary: 1111, LowerHex: f, UpperHex: F, Octal: 17

printf("\nASCII Char: %c %c", 97, 65);
// ASCII Char: a A

printf("\nSigned Decimal: %d %d %d", -1, 0, +1);
// Signed Decimal: -1 0 1

printf("\nUnsigned Decimal: %u %u %u", -1, 0, +1);
// Unsigned Decimal: 18446744073709551615 0 1

printf("\n%e %E", 12, 12);
// 1.200000e+1 1.200000E+1

printf("\nFloat: %f %F", 12, 12);
// Float: 12.000000 12.000000

printf("\nString: %s", "Hello");
// String: Hello