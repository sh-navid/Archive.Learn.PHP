<?php

$conn = new mysqli("localhost", "root", "123456", "dbtest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("insert into task values (null,'new task',false)");//$conn->multi_query()
if ($result === true) {
    echo "Insertion done with ID=" . $conn->insert_id;
} else {
    echo $conn->error;
}

$conn->close();
