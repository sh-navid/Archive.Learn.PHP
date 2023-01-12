<?php

echo 1 ^ 1 ? "T" : "F", "\n";

echo 1 ^ 0 ? "T" : "F", "\n";

echo 0 ^ 0 ? "T" : "F", "\n";

echo ((True xor True) ? "T" : "F"), "\n";

echo ((True xor False) ? "T" : "F"), "\n";

echo ((False xor False) ? "T" : "F"), "\n";
