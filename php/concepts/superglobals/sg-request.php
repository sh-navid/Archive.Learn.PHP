<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="/">
        <input type="text" name="user" value="default get data" />
        <input type="file" name="myfile" />
        <input type="submit" value="Submit GET Request" />
    </form>

    <form action="/" method="post" enctype="multipart/form-data">
        <input type="text" name="user" value="default post data" />
        <input type="file" name="myfile" />
        <input type="submit" value="Submit POST Request" />
    </form>
</head>

<body>
    <?php
    // Run it using 
    // php -S 0.0.0.0:8000 sg-request.php
    // And in browser run this
    // http://localhost:8000/?data=true&age=14
    ?>

    <?php session_start(); ?>

    <h1>SERVER</h1>
    REQUEST_METHOD=> <?= $_SERVER['REQUEST_METHOD'] ?>
    <hr />

    <h1>REQUEST</h1>
    <?php
    foreach ($_REQUEST as $key => $value) {
        echo $key . "=>" . $value . "<br/>";
    }
    ?>
    <hr />


    <h1>GET</h1>
    <?php
    foreach ($_GET as $key => $value) {
        echo $key . "=>" . $value . "<br/>";
        $_SESSION[$key] = "[" . $value . "]";
    }
    ?>
    <hr />


    <h1>POST</h1>
    <?php
    foreach ($_POST as $key => $value) {
        echo $key . "=>" . $value . "<br/>";
    }
    ?>
    <hr />


    <h1>FILE</h1>
    <?php
    foreach ($_FILES as $key => $value) {
        echo $key . "=>" . print_r($value) . "<br/>";
    }
    ?>
    <hr />

    <h1>SESSION</h1>
    <?php
    foreach ($_SESSION as $key => $value) {
        echo $key . "=>" . $value . "<br/>";
        $_SESSION[$key] .= ".";
    }
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