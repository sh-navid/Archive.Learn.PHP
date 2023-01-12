<?php

define("DATA", 1000);

echo DATA . "\n";

function test()
{
    echo DATA/* It's Global */ + 1;
}

test();
