<?php
if ($_GET['data'] == 'array') {
    $data = [10, 12, 14, 16, 18];
    echo implode(",", $data);
} else if ($_GET['data'] == 'json') {
    $data = [
        ["Title" => "Book 01", "Price" => 1000],
        ["Title" => "Book 02", "Price" => 2000],
        ["Title" => "Book 03", "Price" => 3000],
    ];
    echo json_encode($data);
} else {
    echo readfile("example-02.html")[0];
}
