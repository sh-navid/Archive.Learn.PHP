<?php

// echo dirname(__FILE__)."\n\n";
echo __DIR__, "\n\n";
$fp = fopen(__DIR__ . "\datatype-callable.php", 'r');

echo is_resource($fp);
// 1