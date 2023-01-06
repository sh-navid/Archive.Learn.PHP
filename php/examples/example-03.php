<?php
if ($_GET['upload'] == true) {
    $file = "uploads/" . basename($_FILES["myfile"]["name"]);

    if (move_uploaded_file($_FILES["myfile"]["name"], $file)) {
        echo "Upload complete";
    } else {
        echo "Something is wrong";
    }
} else {
    echo readfile("example-03.html")[0];
}