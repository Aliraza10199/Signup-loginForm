<?php

//connection to Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "formdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);



    // Check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }else{
        echo "DB_Connected successfully";
    }
?>