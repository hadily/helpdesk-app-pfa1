<?php

// database connection
ob_clean();
require 'database.php';
ob_end_clean();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// echo "ticket-validate.php"; //works

// retrieve the parameter value
if(isset($_GET['data'])) {
    $data = $_GET['data'];
    //echo $data; 
}   //works 

$sql = "SELECT * FROM ticket WHERE num = $data";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    while ($row) {
        //echo $row['state'];
        //echo "<br>";
        $new_state = 2;
        //echo $new_state;
        $stmt = mysqli_prepare($conn, "UPDATE ticket SET state = ? WHERE num = $data"); 
        mysqli_stmt_bind_param($stmt, "i", $new_state);
        mysqli_stmt_execute($stmt);
        header ("Location: ../client-session/client-home.php?ticket?validated");
        exit();
    }
    
  }

// Close database connection
mysqli_close($conn);

?>