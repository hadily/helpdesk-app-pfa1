<?php

// database connection
ob_clean();
require 'database.php';
ob_end_clean();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Form validation and id_tech affection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // validate user input
    $name = trim($_POST['name']);

    // retrieve the parameter value
    if(isset($_GET['data'])) {
        $data = $_GET['data'];
        //echo $data; 
    }   

    //echo $name; //works

    // check if reply field is empty
    if (empty($name)) {
        echo "empty field!!";
        header ("Location: ../admin-session/admin-home.php?empty?field"); //works
        exit();
    } else {

        $sql = mysqli_prepare($conn, "SELECT * FROM user WHERE name=? AND profile=1");
        mysqli_stmt_bind_param($sql, "s", $name);
        mysqli_stmt_execute($sql);
        $result = mysqli_stmt_get_result($sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            //echo $row['name']."--->".$row['username']; //works

            //echo $row['username']; //works
            $id_tech = $row['username'];

            $stmt = mysqli_prepare($conn, "UPDATE ticket SET id_tech=? WHERE num=$data");
            mysqli_stmt_bind_param($stmt, "i", $id_tech);
            mysqli_stmt_execute($stmt);
            //echo "Affectation done";
            header("Location: ../admin-session/admin-home.php?done");
            exit();
        } else {
            //echo "technician not found!";
            header("Location: ../admin-session/admin-home.php?tech?not?found");
            exit();
        }
    } 
}

// Close database connection
mysqli_close($conn);

?>