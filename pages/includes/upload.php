<?php

// connect to database
ob_clean();
require 'database.php';
ob_end_clean();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// If upload button is clicked 
if (isset($_POST['upload'])) {

    // retrieve the parameter value
    if(isset($_GET['user'])) {
        $user = $_GET['user'];
        //echo $user; //works 
    }

    // URL of the previous page 
    $previousPageUrl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../assets/img/uploads/" . $filename;
 
    $sql = "UPDATE user SET image = ? WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $filename, $user);
    mysqli_stmt_execute($stmt);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        //echo "Image uploaded successfully!";
        header("Location: $previousPageUrl");
        exit();
    } else {
        //echo "Failed to upload image!";
        header("Location: $previousPageUrl");
        exit();
    }
}


?>