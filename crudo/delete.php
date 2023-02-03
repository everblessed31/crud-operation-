<?php
require "db.php";

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $result = mysqli_query($conn, "DELETE FROM crud WHERE id=$id");

    if ($result) {
        // echo "Successully deleted";
        header('location:display.php');
    } else {
        echo "Failed to delete";
    }
}
