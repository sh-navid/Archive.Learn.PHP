<?php

// print_r($_ENV);

// Check out why $_ENV is empty ???
foreach (getenv() as $key => $value) {
    echo $key . "=>" . $value . "\n\n";
}



// Read more here
// https://www.php.net/manual/en/reserved.variables.environment.php