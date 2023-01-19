<?php

$conn = new mysqli("localhost", "root", "123456", "dbtest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Better prevention of SQL Injection - However it needs to sanetize data
$statement = $conn->prepare("insert into task values (null,?,?)");
$statement->bind_param("sb", $task_title, $task_done);

$task_title="new task from prepared statement";
$task_done=false;

$result = $statement->execute();
if ($result === true) {
    echo "Insertion done with ID=" . $conn->insert_id;
} else {
    echo $conn->error;
}

$conn->close();
