<?php

echo chunk_split("This is my text", 2, "-") . "\n";
// Th-is- i-s -my- t-ex-t-

echo chunk_split("This is my text", 4, ".") . "\n";
// This. is .my t.ext.

echo chunk_split("This is my text", 6, "===") . "\n";
// This i===s my t===ext===
