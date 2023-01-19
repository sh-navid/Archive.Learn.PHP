<?php

$conn = new mysqli("localhost", "root", "123456", "dbtest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("insert into task values (null,'new task',false)");
if ($result === true) {
    echo "Insertion done";
} else {
    echo $conn->error;
}

$conn->close();
