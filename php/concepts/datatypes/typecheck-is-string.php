<?php

$i = "AA";

$check = is_string($i);

echo "<", $check, ">", "\n";
echo gettype($check), "\n";

if ($check) {
    echo "YES";
} else {
    echo "NO";
}
