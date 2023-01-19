<?php

$conn = new mysqli("localhost", "root", "123456", "dbtest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $result = $conn->query("select * from task", MYSQLI_STORE_RESULT);
$result = $conn->query("select * from task limit 2 offset 2", MYSQLI_STORE_RESULT);

echo $result->num_rows . "\n";

while ($task = $result->fetch_array(MYSQLI_ASSOC)) {
    echo $task["id"] . " => " . $task["title"] . "\n";
}

$conn->close();
