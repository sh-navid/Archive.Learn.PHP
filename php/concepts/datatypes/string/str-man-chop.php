<?php

echo chop("Hello world", "world") . "\n";

// Default behavior with just one parameter
// Remove all these chars from "right end"
// \0 (NULL), \t, \n, \x0B" - vTab, \r and "white space"

echo chop("Hello world \t \n\r ") . "\n";
