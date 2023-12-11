<?php
    require_once "Connect.php";
    $studentid = $_GET["studentid"];
    $query = "DELETE FROM student WHERE studentid = '$studentid'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>