<?php

// connect to database
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "PFA_2";

// create connection
$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>