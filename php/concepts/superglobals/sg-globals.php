<?php

$v = 12;
echo $v . "\n";
echo $GLOBALS['v'] . "\n";

$GLOBALS['v'] = 15;
echo $v . "\n";
echo $GLOBALS['v'] . "\n";