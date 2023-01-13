# PHP
## Superglobals
- [`$GLOBALS`](sg-globals.php)
- [`$_GET`](sg-request.php)
- [`$_POST`](sg-request.php)
- [`$_ENV`](sg-env.php)
- [`$_FILES`](sg-request.php)
- [`$_COOKIE`](sg-cookie.php)
    >> Small file on client side to identify the user
    - `setcookie()`
- [`$_SERVER`](sg-server.php)
- [`$_SESSION`](sg-request.php)
    >> Store data in variable to use in multiple pages
    >> Session can be live until you close the browser
    - `session_start()`
    - `session_unset()`
        >> Remove all variables in session
    - `session_destroy()`
        >> Kill the session
- [`$_REQUEST`](sg-request.php)
