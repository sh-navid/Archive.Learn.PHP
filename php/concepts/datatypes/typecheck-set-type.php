<?php

$i = 12;
echo $i, " ", gettype($i), "\n";
//12 integer

settype($i, "float");
echo $i, " ", gettype($i);
//12 double