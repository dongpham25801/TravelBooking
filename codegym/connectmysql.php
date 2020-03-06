<?php
    /*
    $svname= "localhost";
    $username= "root";
    $passwd= "";
    $dbname= "codegym";
    $conn= mysqli_connect($svname, $username, $passwd, $dbname);
    mysqli_select_db($conn, $dbname);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    */

    $svname= "localhost";
    $username= "root";
    $passwd= "";
    $dbname= "codegym";
    $conn = new mysqli($svname, $username, $passwd, $dbname);
    /*
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    */
?>