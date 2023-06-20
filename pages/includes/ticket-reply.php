<?php

session_start();

//database connection
ob_start();
require "../includes/database.php";
ob_end_clean();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Form validation and submittion
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // validate user input 
    $reply = trim($_POST['reply']);
    
    // retrieve the parameter value
    if(isset($_GET['data'])) {
        $data = $_GET['data'];
        // echo $data; 
      }   //works  

    // check if reply field is empty
    if (empty($reply)) {
        echo "empty field!!";
        header ("Location: ../tech-session/ticket-info-reply.php?empty?field"); //works
        exit();
    } else {
        //echo "else"; //works
        //echo $_SESSION['state']; //works
        //$_SESSION['state'] = 1; //works
        //echo $_SESSION['state']; //works
        $new_state = 1;
        //echo $state; //works
        
        //echo $_SESSION['id_tech'];

       $query = "SELECT * FROM user, ticket WHERE ticket.num = $data AND user.username = '{$_SESSION['id_tech']}'";
       $result = mysqli_query($conn, $query);
       $row = mysqli_fetch_assoc($result);

       
       //echo $row['tick_num'];
       $tick_num = $row['tick_num']+1;
       //echo $tick_num;
       $id_tech = $row['username'];

        // update tick_num for tech in user table
        $sql = mysqli_prepare($conn, "UPDATE user SET tick_num=? WHERE username = $id_tech");
        mysqli_stmt_bind_param($sql, "i", $tick_num);
        mysqli_stmt_execute($sql);

        // update ticket table with tech reply
        $stmt = mysqli_prepare($conn, "UPDATE ticket SET reply=?, state=? WHERE num = $data"); 
        mysqli_stmt_bind_param($stmt, "si", $reply, $new_state); 
        //mysqli_bind_param($stmt, "si", $reply, $state);
        mysqli_stmt_execute($stmt);
        header ("Location: ../tech-session/tech-home.php");
        exit();

    }
  }

// Close database connection
mysqli_close($conn);

?>