<?php

// Run it using 
// php -S 0.0.0.0:8000 sg-request.php
// And in browser run this
// http://localhost:8000/?data=true&age=14

$keys = [
    'LANG',
    'PATH',
    'PHP_SELF',
    'SCRIPT_NAME',
    'SCRIPT_URI',
    'GATEWAY_INTERFACE',
    'SERVER_ADDR',
    'SERVER_NAME',
    'SERVER_SOFTWARE',
    'SERVER_PORT',
    'SERVER_PROTOCOL',
    'SERVER_ADMIN',
    'SERVER_SIGNATURE',
    'REMOTE_ADDR',
    'REMOTE_HOST',
    'REMOTE_PORT',
    'REQUEST_METHOD',
    'REQUEST_TIME',
    'QUERY_STRING',
    'SCRIPT_FILENAME',
    'PATH_TRANSLATED',
    'HTTPS',
    'HTTP_HOST',
    'HTTP_ACCEPT',
    'HTTP_ACCEPT_CHARSET',
    'HTTP_REFERER'
];

print_r($_SERVER);

foreach ($keys as $k) {
    if (array_key_exists($k, $_SERVER) === true)
        echo $k . "=>" . $_SERVER[$k] . "\n<br/>";
}
