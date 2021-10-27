<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bluerosesdb";
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        echo "FAIL";
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "SUCCESS";
    }
?>