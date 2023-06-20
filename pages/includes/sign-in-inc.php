<?php  

//start session
session_start();

//connect to database
require 'database.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];
    //echo "post success";

    // Query database for user
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    //echo "done";

    if (mysqli_num_rows($result) == 1) {
        // User is authenticated, redirect to dashboard or other authorized page
        //echo "authentification success";
        
        // Get user information from the database
         $row = mysqli_fetch_assoc($result);
         $name = $row['name'];
         $profile = $row['profile'];
         $data = $row['username'];

         // Store user information in session variables
         $_SESSION['email'] = $email;
         $_SESSION['name'] = $name;
         $_SESSION['profile'] = $profile;

        // // Redirect user to appropriate page based on their profile
         switch ($profile) {
             case 0:
                 header("Location: ../admin-session/admin-home.php");
                 exit;
             case 1:
                 header("Location: ../tech-session/tech-home.php");
                 exit;
             default:
                 header("Location: ../client-session/client-home.php");
                 exit;
         }
    } else {
        // Authentication failed, show error message
        //echo "authentification error";
        header('Location: ../sign-in.html?wrong?email?or?password');
    }
}
else {
    //echo "post error";
    header("Location: sign-in-inc.php?post?error");
}

// Close database connection
mysqli_close($conn);

?>