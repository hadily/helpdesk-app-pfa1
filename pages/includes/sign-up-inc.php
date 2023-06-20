<?php


// connect to database
require 'database.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validate user input
    $name = trim($_POST["name"]); 
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $errors = array(); 

    //check if fields are not empty 
    if (empty($name)) {
        $errors[] = "Name is required";
    } 
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    $status = 0;

    if (empty($errors)) {
        $stmt = mysqli_prepare($conn, "INSERT INTO user (password, name, email, status) VALUES (?,?,?,?)");
        mysqli_stmt_bind_param($stmt, "sssi", $password, $name, $email, $status);
        mysqli_stmt_execute($stmt);
        echo "You have successfully signed up! Sign in";
        //header("Location : ../sign-in.html");
        header("Location: ../sign-in.html?login");
        exit;
    }
    else {
        header("Location: ../sign-up.html?empty?fields");
        exit;
    }
}
else {
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