<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 01</title>
</head>

<body>
    <h1>Home Page (SSR)</h1>
    <?php for ($i = 0; $i < 10; $i++) echo '<span>' . $i . '</span>' ?>

    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div>
            <h4><?= $i ?></h4>
        </div>
    <?php endfor ?>

    <?php
    $data = [
        ["Title" => "Book 01", "Price" => 1000],
        ["Title" => "Book 02", "Price" => 2000],
        ["Title" => "Book 03", "Price" => 3000],
    ]
    ?>

    <?php foreach ($data as $row) : ?>
        <div>
            <h4><?= $row["Title"] ?></h4>
            <h5>$<?= $row["Price"] ?></h5>
        </div>
    <?php endforeach ?>
</body>

</html>