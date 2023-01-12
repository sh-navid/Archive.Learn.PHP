<?php

echo 1 && 1 ? "T" : "F", "\n";

echo 1 && 0 ? "T" : "F", "\n";

echo 0 && 0 ? "T" : "F", "\n";

// precedence of "and" is lower than "&&"
// this is so important
echo ((True and True) ? "T" : "F"), "\n";

echo ((True and False) ? "T" : "F"), "\n";

echo ((False and False) ? "T" : "F"), "\n";
