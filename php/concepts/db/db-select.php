<?php

$conn = new mysqli("localhost", "root", "123456", "dbtest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("select * from task", MYSQLI_STORE_RESULT);

while ($task = $result->fetch_array(MYSQLI_ASSOC)) {
    echo $task["title"]."\n";
}
