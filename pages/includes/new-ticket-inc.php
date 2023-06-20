<?php

// database connection
ob_clean();
require "database.php";
ob_end_clean();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //retrieve info from form
    $name = trim($_POST["name"]);
    $object = trim($_POST["object"]);
    $msg = trim($_POST["msg"]);
    $reply = "";
    
    //check if fields are not empty 
    if (empty($name)) {
        $errors[] = "Name is required";
    } 
    if (empty($object)) {
        $errors[] = "Object is required";
    }
    if (empty($msg)) {
        $errors[] = "Message is required";
    }
    
    
    if (empty($errors)) {
        // getting id_client
        $query = "SELECT * FROM user WHERE name ='$name' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        //echo $row['username'];
        $id_client = $row['username'];
        $tick_num = $row['tick_num']+1;

        //add ticket to tick_num in user table
        $sql = mysqli_prepare($conn, "UPDATE user SET tick_num = ? WHERE username = $id_client");
        mysqli_stmt_bind_param($sql, "i", $tick_num);
        mysqli_stmt_execute($sql);

        $stmt = mysqli_prepare($conn, "INSERT INTO ticket (object, msg, reply, id_client) VALUES (?,?,?,?)");
        mysqli_stmt_bind_param($stmt, "ssss", $object, $msg, $reply, $id_client);
        mysqli_stmt_execute($stmt);
        // echo "new ticket sent";
        // $url = "../client-session/client-home.php";
        header("Location:../client-session/client-home.php");
        exit;
    } else {
        echo "Error";
        header("Location: ../client-session/new-ticket.html?error");
        exit;
    }

} else {
    echo "error posting";
}

// If there are errors, display them in a user-friendly manner
if (!empty($errors)) {
    foreach($errors as $error) {
        echo "<p>$error</p>";
    }
}

// Close database connection
mysqli_close($conn);


?>