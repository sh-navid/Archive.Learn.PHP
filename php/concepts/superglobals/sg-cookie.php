<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="text" name="cookie_name" />
        <input type="text" name="cookie_value" />
        <input type="submit" value="Make a cookie" />
    </form>

    <h1>GET</h1>
    <?php
    foreach ($_GET as $key => $value) {
        echo $key . "=>" . $value . "<br/>";
    }
    if (key_exists("cookie_name", $_GET) && key_exists("cookie_value", $_GET))
        setcookie($_GET["cookie_name"], $_GET["cookie_value"], time() + (86400 * 30), "/"); // A day
    ?>
    <hr />

    <h1>COOKIE</h1>
    <?php
    foreach ($_COOKIE as $key => $value) {
        echo $key . "=>" . $value . "<br/>";
    }
    ?>
    <hr />
</body>

</html>