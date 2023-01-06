<?php
if ($_GET['upload'] == true) {
    if (!empty($_FILES['myfile'])) {
        $file_path = "media/";
        $file_path = $file_path . basename($_FILES['myfile']['name']);

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $file_path))
            echo "Uploaded";
        else
            echo "Something is wrong";
    }
} else {
    echo readfile("example-03.html")[0];
}
