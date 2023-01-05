<?php

$str = "سلام";

$encoded = convert_uuencode($str);

echo $str . " - " . $encoded . " - " . convert_uudecode($encoded);
/* 
سلام - (V+/9A-BGV84`
`
 - سلام
*/