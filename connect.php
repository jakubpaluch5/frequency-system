<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "freq";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    {
        die("Nie udało się: " . mysqli_connect_error());
    }
?>